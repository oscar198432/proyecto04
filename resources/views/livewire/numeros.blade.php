<div style="text-align: center">
    <h1>Este es el ejercicio de contador</h1>

    <button wire:click="incrementar">+</button>
    <h1>{{$contar}}</h1>
    <button wire:click="disminuir">-</button>
    
    <br>

    <p>{{$multiplica}}</p>
    <button wire:click="tablaMultip">Tabla</button>
    
</div>
