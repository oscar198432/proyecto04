<div>
    Tema: <input type="text" wire:model='tema' /> <br><br>
    Descripcion: <input type="text" wire:model='descripcion' /> <br><br>

    <h3>Tema: {{$tema}}</h3>
    <h3>Descripcion: {{$descripcion}}</h3>

    <h3>Ciclo de vida de un componente Livewire</h3>
    @foreach($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach
</div>
