<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Formulario estudiantes</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='submitForm'>
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control" wire:model='name'/>
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" wire:model='email'>
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefono</label>
                                    <input type="text" name="phone" class="form-control" wire:model='phone'>
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="msg">Perfil</label>
                                    <textarea name="msg" class="form-control" wire:model='msg'></textarea>
                                    @error('msg')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
</div>

