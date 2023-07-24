<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class FormPropuestasAprobadas extends Component
{

    use WithPagination;
    public $perPage = '2';
    public function render()
    {
        return view('livewire.form-propuestas-aprobadas', [
            'users' => User::paginate($this->perPage),
        ]);
    }
}
