@extends('admin-panel.dashboard panel.dashnav')
@section('contenido')
<h1 class="mt-4">Lista de cursos</h1>
<div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Duracion</th>
                    <th>Nivel</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Duracion</th>
                    <th>Nivel</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nombre_curso }}</td>
                        <td>{{ $curso->descripcion }}</td>
                        <td>${{ $curso->precio }}</td>
                        <td>{{ $curso->duracion }}hrs</td>
                        <td>{{ $curso->nivel }}</td>
                        <td><button type="button" class="btn btn-success">EDIT</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection