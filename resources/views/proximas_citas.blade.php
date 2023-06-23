@if(isset($proximasCitas) && count($proximasCitas) > 0)
    <h2>Próximas citas:</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($proximasCitas as $cita)
            <tr>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
                <td>
                    <form action="{{ route('eliminar', ['id' => $cita->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('reagendar', $cita->id) }}" class="btn btn-primary">Reagendar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
