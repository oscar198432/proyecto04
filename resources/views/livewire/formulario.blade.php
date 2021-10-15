<div>
    Digite Nombre: <input type="text" wire:model.debounce.1000ms='name'/> <br><br>

    Perfil: <textarea wire:model.debounce.1000ms='perfil'></textarea> <br><br>

    Funcionario: <br>
    Planta <input type="radio" value="Planta" wire:model.debounce.1000ms='funcionario'/>
    Contratista <input type="radio" value="Contratista" wire:model.debounce.1000ms='funcionario'/>

    <br><br>

    Fortalezas: <br>
    Frontend <input type="checkbox" value="Frontend" wire:model='fortalezas'/> <br>
    Backend <input type="checkbox" value="Backend" wire:model='fortalezas'/> <br>
    Fullstack <input type="checkbox" value="Fullstack" wire:model='fortalezas' /> <br>

    Lenguajes: <br>

    <select wire:model='lenguaje'>
        <option value="">Seleccione un lenguaje</option>
        <option value="C#">C#</option>
        <option value="Java">Java</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
    </select>

    <br><br>


    <button type="button" wire:click='addTwoNumbers(50, 100)'>Sumar</button> <br><br>

    <form wire:submit.prevent='setSuma'>
        Digite numero 1: <input type="text" name="numero1" wire:model='numero1'>
        Digite numero 2: <input type="text" name="numero2" wire:model='numero2'>
        <button type="submit">Enviar</button>
    </form>


    <hr>
    Nombre: {{$name}} <br><br>
    Perfil: {{$perfil}} <br><br>
    Funcionario: {{$funcionario}} <br><br>

    Fortalezas:
        <ul>
        @foreach($fortalezas as $fortaleza)
            <li>{{$fortaleza}}</li>
        @endforeach
        </ul>

    <br><br>

    Lenguaje: {{$lenguaje}} <br><br>

    Sumatoria: {{$suma}} <br><br>
    
</div>

