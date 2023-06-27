<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de citas</title>
    <style>
        /* Estilos CSS para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Lista de citas</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Tipo de servicio</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proximasCitas as $cita)
                <tr>
                    <td>{{ $cita->nombre }}</td>
                    <td>{{ $cita->email }}</td>
                    <td>{{ $cita->tipo_servicio }}</td>
                    <td>{{ $cita->fecha }}</td>
                    <td>{{ $cita->hora }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
