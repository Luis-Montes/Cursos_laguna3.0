@extends('admin-panel.dashboard panel.dashnav')

@section('contenido')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Especialidad</th>
                        <th>Experiencia</th>
                        <th>Experiencia laboral</th>
                        <th>Fecha de nacimiento</th>
                        <th>Titulación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Especialidad</th>
                        <th>Experiencia</th>
                        <th>Experiencia laboral</th>
                        <th>Fecha de nacimiento</th>
                        <th>Titulación</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($maestros as $maestro)
                        <tr>
                            <td>{{ $maestro->clave }}</td>
                            <td>{{ $maestro->nombre }}</td>
                            <td>{{ $maestro->apellido_paterno }}</td>
                            <td>{{ $maestro->apellido_materno }}</td>
                            <td>{{ $maestro->direccion }}</td>
                            <td>{{ $maestro->email }}</td>
                            <td>{{ $maestro->especialidad }}</td>
                            <td>{{ $maestro->experiencia }}</td>
                            <td>{{ $maestro->experiencia_laboral }}</td>
                            <td>{{ $maestro->fecha_nacimiento }}</td>
                            <td>{{ $maestro->titulacion }}</td>
                            <td><button type="button" class="btn btn-success">EDIT</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection