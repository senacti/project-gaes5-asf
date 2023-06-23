@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Agendamiento</h2>
        </div>
        <div>
            <a href="" class="btn btn-primary">Crear cita</a>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            <tr>
                <td class="fw-bold">Asistir a mantenimiento</td>
                <td>*Descripcion*</td>
                <td>
                    *Fecha*
                </td>
                <td>*Hora*</td>
                <td>
                    <span class="badge bg-warning fs-6">Pendiente</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection