@extends('layouts.plantilla')

@section('title', 'Usuarios')
<link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
@section('contenido')

<div class="tablaEmbarcaciones">
    <div class="d-flex flex-row-reverse mb-2">
        <a class="enlaceCreateEmb" href="{{ route('usuarios.create') }}">Crear usuario</a>
    </div>

    <table id="example" class="table table-hover table-custom-hover rounded-3 overflow-hidden table-striped" style="width:100%">
        <thead>
            <tr>
                <th [attr.colspan]="12" class="cabeceraTabla">
                    USUARIOS
                </th>
            </tr>
            <tr class="cabeceraDatos">
                <th style="display: none;">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Apellido</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Rol</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Email</th>
                <th class="text-center">Dirección</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr class=" text-center">
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
                <td class="text-truncate">{{ $usuario->Descripcion }}</td>
                <td><a href="{{route('usuarios.show',['usuario'=>$usuario->UsuarioID])}}">VER</a></td>




            </tr>
            @endforeach
        </tbody>
    </table>
</div>

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