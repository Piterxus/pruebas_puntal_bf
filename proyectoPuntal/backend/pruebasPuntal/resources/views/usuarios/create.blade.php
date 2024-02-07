@extends('layouts.plantilla')

@section('title', 'Crear usuario')

@section('contenido')
<form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono">
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
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni">
    </div>
    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>
    <div class="form-group">
        <label for="imagen">Imagen</label>
        <input type="file" class="form-control" id="imagen" name="imagen">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{ route('usuarios.index') }}">Volver a la lista de usuarios</a>
@endsection