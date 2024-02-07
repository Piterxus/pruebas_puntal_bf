@extends('layouts.plantilla')

@section('title', $usuario->NombreCompleto)

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
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
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
            <td><a href="{{route('usuarios.edit',['usuario'=>$usuario->UsuarioID])}}">EDITAR</a></td>
            <td>

                <form action="{{route('usuarios.destroy',['usuario'=>$usuario->UsuarioID])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick='return confirm("¿Desea eliminarlo?")' class='btn btn-secondary btn-sm' type="submit">Eliminar</button>
                </form>
            </td>

        </tr>


    </tbody>

</table>
<a href="{{ route('usuarios.index') }}">Volver a la lista de usuarios</a>
@endsection