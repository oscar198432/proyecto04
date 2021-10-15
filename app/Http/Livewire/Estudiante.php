<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Estudiante extends Component
{

    public $name;
    public $email;
    public $phone;
    public $msg;

    public function submitForm()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'msg'=>'required|min:20'
        ]);

        dd('DATOS DIGITADOS', $this->name, $this->email, $this->phone, $this->msg);
    }


    public function update($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'msg'=>'required|min:20'
        ]);
    }


    public function render()
    {
        return view('livewire.estudiante');
    }
}
