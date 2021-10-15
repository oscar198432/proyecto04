<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Temas extends Component
{
 
    public $tema;
    public $descripcion;
    public $infos = [];

    public function mount()
    {
        $this->infos[] = "El componente se cargo";
    }

    public function hydrate()
    {
        $this->infos[] = 'El componente esta cambiando';
    }

    public function updating($descripcion, $valor)
    {
        $this->infos[] = 'El componente se esta actualizando';
    }

    public function updated($descripcion, $valor)
    {
        $this->infos[] = 'El componente se actualizo';
    }

    public function updatingDescripcion()
    {
        $this->infos[] = 'El componente esta actualizando la propiedad descripcion';
    }

    public function updatedDescripcion()
    {
        $this->infos[] = 'El componente actualizo la propiedad descripcion';
    }




    public function render()
    {
        return view('livewire.temas');
    }
}
