<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... -->
</head>

<body>
    <!-- ... -->

    <h1>Comentarios existentes</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->comment }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- ... -->
</body>

</html>
