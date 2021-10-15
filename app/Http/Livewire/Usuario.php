<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Usuario extends Component
{

    use WithPagination;



    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.usuario',['users'=>$users]);
    }
}
