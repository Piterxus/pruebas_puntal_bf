<form action="{{route('usuarios.update', ['usuario'=>$usuario->UsuarioID])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->NombreCompleto }}">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ $usuario->NombreUsuario }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->Email }}">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $usuario->Telefono }}">
    </div>
    <div class="form-group">
        <label for="rol">Rol</label>
      
        <select name="rol" id="rol">
            <option value="1">Concesionario</option>
            <option value="2">Administrativo</option>
            <option value="3">Guardamuelles</option>
            <option value="4">Guardia Civil</option>
        </select>
        
    </div>
    <div class="form-group">
        <label for="estado">Estado</label>
        <select name="estado" id="estado">
            <option value="1">Habilitado</option>
            <option value="0">Deshabilitado</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->Email }}">
    </div>
    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $usuario->Direccion }}">
    </div>
    <div class="form-group">
        <label for="imagen">Imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>