@extends('admin-panel.dashboard panel.dashnav')
@section('contenido')
    <h1 class="mt-4">Lista de maestros</h1>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Especialedad</th>
                    <th>Numero de Seguro</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Especialedad</th>
                    <th>Numero de Seguro</th>                    
                </tr>

            </tfoot>
            <tbody>
                @foreach ($maestros as $maestro)
                    <tr>
                        <td>{{ $maestro->clave }}</td>
                        <td>{{ $maestro->nombre_completo }}</td>
                        <td>{{ $maestro->email }}</td>
                        <td>{{ $maestro->direccion }}</td>
                        <td>{{ $maestro->especialidad }}</td>
                        <td>{{ $maestro->numero_seguro }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection