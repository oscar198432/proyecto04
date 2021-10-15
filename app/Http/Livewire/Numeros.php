<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Numeros extends Component
{
    public $contar = 0;
    public $multiplica;
    public $multiplicado;

    public function incrementar()
    {
        $this->contar++;
    }

    public function disminuir()
    {
        $this->contar--;
    }

    public function tablaMultip(){
        for($i=1; $i<=10; $i++){
            $this->multiplica = $i*$this->contar;
            //$this->multiplicado = ("i X "+ $this->contar + " = " + $this->multiplica);
        }
    }
    
    
    public function render()
    {
        return view('livewire.numeros');
    }
}
