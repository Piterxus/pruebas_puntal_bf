@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('contenido')

<h4>CREAR USUARIO</h4>
<a href="{{ route('usuarios.create') }}">Crear usuario</a>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th style="display: none;">ID</th>
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
        @foreach ($usuarios as $usuario)
        <tr>
            <td style="display: none;">{{ $usuario->id }}</td>
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
<script type="text/javascript">
    // $(document).ready(function() {
    //     new DataTable('#example');
    // });

    $(document).ready(function() {
        var dataTable = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function() {
            // Obtener el nodo de la celda que contiene el enlace "VER"
            var cell = $(this).find('td:eq(0)'); // Cambia 0 por el índice de la columna que contiene el ID

            // Obtener el contenido de la celda (que debería ser el ID)
            var userId = cell.text();

            // Redirigir a la ruta usuarios.show con el ID del usuario
            window.location.href = "{{ url('usuarios') }}/" + userId;
        });
    });
</script>
@endsection