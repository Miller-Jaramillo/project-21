<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class FormPropuestasEnviadas extends Component
{

    use WithPagination;

    public $perPage = '1';




    public function render()
    {

        return view('livewire.form-propuestas-enviadas', [
            'users' => User::paginate($this->perPage),
        ]);
    }

}