@extends('layouts.plantilla')

@section('title', $instalacion->CodigoInstalacion)
@section('contenido')
<table>
    <thead>
        <tr>
            <th>Código Instalación</th>
            <th>Ubicación</th>
            <th>Dimensiones</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $instalacion->CodigoInstalacion }}</td>
            <td>{{ $instalacion->Ubicacion }}</td>
            <td>{{ $instalacion->Dimensiones }}</td>
            <td>{{ $instalacion->Descripcion }}</td>
            @if ($instalacion->Estado == 1)
            <td>Habilitado</td>
            @else
            <td>Deshabilitado</td>
            @endif
            <td><a href="{{route('instalaciones.edit',['instalacione'=>$instalacion->InstalacionID])}}">EDITAR</a></td>
            <td>

                <form action="{{route('instalaciones.destroy',['instalacione'=>$instalacion->InstalacionID])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick='return confirm("¿Desea eliminarlo?")' class='btn btn-secondary btn-sm' type="submit">Eliminar</button>
                </form>
            </td>

        </tr>


    </tbody>
</table>
<a href="{{ route('instalaciones.index') }}">Volver a la lista de instalaciones</a>
@endsection