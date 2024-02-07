@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('contenido')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<h4>CREAR USUARIO</h4>
<a href="{{ route('usuarios.create') }}">Crear usuario</a>
<table id="example" class="table table-striped" style="width:100%">
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
            <td><a href="{{route('usuarios.show',['usuario'=>$usuario->UsuarioID])}}">VER</a></td>




        </tr>
        @endforeach
    </tbody>
</table>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        new DataTable('#example');
    });
</script> -->
@endsection