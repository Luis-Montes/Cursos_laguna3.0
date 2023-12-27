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
                        <th>Genero</th>
                        <th>Fecha de nacimiento</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Especialidad</th>
                        <th>Titulación</th>
                        <th>Experiencia</th>
                        <th>Numero de seguro</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Genero</th>
                        <th>Fecha de nacimiento</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Especialidad</th>
                        <th>Titulación</th>
                        <th>Experiencia</th>
                        <th>Numero de seguro</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($maestros as $maestro)
                        <tr>
                            <td>{{ $maestro->clave }}</td>
                            <td>{{ $maestro->nombre_completo }}</td>
                            <td>{{ $maestro->genero }}</td>
                            <td>{{ $maestro->fecha_nacimiento }}</td>
                            <td>{{ $maestro->direccion }}</td>
                            <td>{{ $maestro->email }}</td>
                            <td>{{ $maestro->especialidad }}</td>
                            <td>{{ $maestro->titulacion }}</td>
                            <td>{{ $maestro->experiencia }}</td>
                            <td>{{ $maestro->numero_seguro }}</td>
                            <td><button type="button" class="btn btn-success">EDIT</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection