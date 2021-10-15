<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Formulario extends Component
{
    public $name;
    public $perfil;
    public $funcionario;
    public $fortalezas=[];
    public $lenguaje;
    public $suma;
    public $numero1;
    public $numero2;

    public function addTwoNumbers($num1, $num2)
    {
        $this->suma = $num1 + $num2;
    }

    public function setSuma()
    {
        $this->suma = $this->numero1 + $this->numero2;
    }


    public function render()
    {
        return view('livewire.formulario');
    }
}
