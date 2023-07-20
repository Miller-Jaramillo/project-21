<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use BaconQrCode\Renderer\Path\Close;
use Livewire\WithPagination;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\StatefulGuard;
use App\Mail\UsersCredentials;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class UsersTable extends Component
{
    // -> Variables
    use WithPagination;
    public $search = '';
    public $perPage = '5';
    public $selectedRole = 'todos';
    public $selectedOption = '';
    public $name;
    public $email;
    public $password;
    public $showForm;
    public $confirmingUserDeletion = false;
    public $showUserInfo = false;
    public $userInfo;
    public $message = '';
    public $selectedStyle = 'estiloDark';

    // cmt: Se seleciona el usuario para filtrar la busqueda por rol
    public function updatedSelectedOption($value)
    {
        $this->selectedOption = $value;
    }

    // --> RENDER DEL COMPONENTE
    public function render()
    {
        $users = User::query();

        // cmt: Filtro de search -> busca por nombre y por email al user
        if ($this->search) {
            $users->where(function ($query) {
                $query->where('name', 'LIKE', "%{$this->search}%")->orWhere('email', 'LIKE', "%{$this->search}%");
            });
        }

        $userRoleId = Auth::user()->role_id;

        if ($userRoleId === 1) {
            // Si el usuario tiene role_id 1 (administrador), muestra todos los usuarios
        } elseif ($userRoleId === 2) {
            // Si el usuario tiene role_id 2 (espectador), excluye los usuarios con role_id 1 (administrador)
            $users->where('role_id', '!=', 1);
        } elseif ($userRoleId === 3) {
            // Si el usuario tiene role_id 3 (participante), excluye los usuarios con role_id 1 (administrador)
            $users->where('role_id', '!=', 1);
        }

        if ($this->selectedRole === 'administradores') {
            $users->where('role_id', 1);
        } elseif ($this->selectedRole === 'espectadores') {
            $users->where('role_id', 2);
        } elseif ($this->selectedRole === 'participantes') {
            $users->where('role_id', 3);
        }
        $users->orderByRaw('id <> ?', [Auth::id()]); // cmt: Ubica de primero en la lista al user:Auth
        $users = $users->paginate($this->perPage); // cmt: Paginacion

        return view('livewire.users-table', [
            'users' => $users,
        ]);
    }
    // cmt: Btn limiar el search
    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 5;
    }
    // cmt: Abre el formulario para agregar un nuevo admin
    public function openForm()
    {
        $this->showForm = true;
    }

    // cmt: Cierra el formulario para agregar un nuevo admin
    public function closeForm()
    {
        $this->showForm = false;
        $this->reset();
    }

    // cmt: Guarda los datos formulario -> agrega un nuevo usuario
    public function submitForm()
    {
        // -> Lógica para procesar el formulario y guardar el administrador en la base de datos

        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            //'password' => 'required|string|min:8',
            //'cellphone' => 'required|string',
        ]);

        $plainPassword = Str::random(10); // Generar contraseña en texto plano
        $encryptedPassword = Hash::make($plainPassword); // Encriptar la contraseña


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $encryptedPassword,
            //'cellphone' => $validatedData['cellphone'],
        ]);


        $credentialsMail = new UsersCredentials($user, $plainPassword); // Pasar la contraseña generada
        Mail::to($user->email)->send($credentialsMail);
        $role = Role::firstOrCreate(['name' => 'Admin']);
        $user->role_id = $role->id;
        $user->role_name = 'Administrador';
        $user->created_by = Auth::user()->id;

        $user->assignRole($role);

        // Envío del correo electrónico con las credenciales

        $user->save();

        // -> Después de guardar, puedes cerrar la vista flotante
        $this->reset();
        $this->closeForm();
    }

    // cmt: Se confirma la desicion de eliminar el usuario
    public function confirmUserDeletion($userId)
    {
        $this->confirmingUserDeletion = $userId;
        $user = User::find($userId);
        $this->name = $user->name;
    }
    // cmt: Se cancela la desicion de eliminar el usuario
    public function cancelUserDeletion()
    {
        $this->confirmingUserDeletion = null;
    }

    // cmt: Elimina el usuario
    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        $currentUser = Auth::user();
        if ($currentUser->id === $user->created_by) {
            // -> El usuario actual es el creador del usuario a eliminar
            $user->delete();
            // -> Actualizar la lista de usuarios después de eliminar al usuario
            $this->render();
            $this->message = $user->name . ' se ha eliminado correctamente.';
        } elseif ($currentUser->created_by === null) {
            // -> El usuario actual se registró a través de la ruta principal y puede eliminar a cualquier usuario
            $user->delete();
            // -> Actualizar la lista de usuarios después de eliminar al usuario
            $this->render();
            $this->message = $user->name . ' se ha eliminado correctamente.';
        } else {
            if ($user->role_name == 'Espectador' || $user->role_name == 'Participante') {
                $this->message = nl2br(" ¡No estas autorizado a eliminar un {$user->role_name}!\nSolicita los permisos con el Super Admin");
            } else {
                $this->message = nl2br(" ¡No tiene autorizado eliminar a {$user->name}!\nSolo puedes eliminar a los Administradore que tú has creado");
            }
        }

        $this->confirmingUserDeletion = null;
    }

    public function showUser($userId)
    {
        $user = User::findOrFail($userId);
        $this->userInfo = $user;

        $this->showUserInfo = true;
    }

    public function closeUserInfo()
    {
        $this->showUserInfo = false;
        $this->userInfo = null;
    }
}
