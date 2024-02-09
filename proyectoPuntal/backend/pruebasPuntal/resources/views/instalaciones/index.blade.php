@extends('layouts.plantilla')

@section('title', 'Instalaciones')
<link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
@section('contenido')

<div class="tablaEmbarcaciones">
    <div class="d-flex flex-row-reverse mb-2">
        <a class="enlaceCreateEmb" href="{{ route('instalaciones.create') }}">Crear instalación</a>
    </div>

    <table id="example" class="table table-hover table-custom-hover rounded-3 overflow-hidden table-striped" style="width:100%">
        <thead>
            <tr>
                <th [attr.colspan]="12" class="cabeceraTabla">
                    INSTALACIONES
                </th>
            </tr>
            <tr class="cabeceraDatos">
                <th style="display: none;">ID</th>
                <th class="text-center">Código Instalación</th>
                <th class="text-center">Ubicación</th>
                <th class="text-center">Dimensiones</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instalaciones as $instalacion)
            <tr class=" text-center">
                <td style="display: none;">{{ $instalacion->InstalacionID }}</td>
                <td>{{ $instalacion->CodigoInstalacion }}</td>
                <td>{{ $instalacion->Ubicacion }}</td>
                <td>{{ $instalacion->Dimensiones }}</td>
                <td>{{ $instalacion->Descripcion }}</td>
                @if ($instalacion->Estado == 1)
                <td>Habilitado</td>
                @else
                <td>Deshabilitado</td>
                @endif
                <td><a href="{{route('instalaciones.show',['instalacione'=>$instalacion->InstalacionID])}}">VER</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
@endsection