@extends('layouts.tabla')

@section('title', 'Usuarios')

@section('contenido')
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Imagen</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->NombreCompleto }}</td>
            <td>{{ $usuario->NombreUsuario }}</td>
            <td>{{ $usuario->DNI }}</td>
            <td>{{ $usuario->Telefono }}</td>
            @if ($usuario->RolID == 1)
            <td>Concesionario</td>
            @elseif ($usuario->RolID == 2)
            <td>Administrativo</td>
            @elseif ($usuario->RolID == 3)
            <td>Guardamuelles</td>
            @elseif ($usuario->RolID == 4)
            <td>Guardia Civil</td>
            @endif
            @if ($usuario->Habilitado == 1)
            <td>Habilitado</td>
            @else
            <td>Deshabilitado</td>
            @endif
            <td>{{ $usuario->Email }}</td>
            <td>{{ $usuario->Direccion }}</td>
            <td><img src="{{ asset('images/' . $usuario->Imagen) }}" alt=""></td>
            <td>{{ $usuario->Descripcion }}</td>




        </tr>
        @endforeach
    </tbody>
</table>

@endsection