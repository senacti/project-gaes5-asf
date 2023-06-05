<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .nserviteca {
            display: flex;
            color: #ffde59;
            font-size: 10px;
            align-items: center;
        }

        .nserviteca .img {
            width: 100px;
            height: 100px;
            text-align: right;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0d47a1;
            color: #0d47a1;
        }

        .container {
            background-color: #ffde59;
            width: 50%;
            margin: 0 auto;
            padding: 50px 0;
            text-align: center;
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 100%;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<header>
    <div class="nserviteca">
        <div class="imagen">
            <img src="{{ asset('img/Carro.jpg') }}" class="img" alt="">
        </div>
        <h1>DON SPEED'S FIERRO</h1>
    </div>
</header>

<body>
    <div class="container">
        <h2>Registrarse</h2>
        <form id="login-form" action="#" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span id="error-email" style="color: red; display: none;">Por
                    favor ingrese un email válido.</span>
            </div>
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" pattern="[A-Za-z0-9]+" required>
                <span id="error-usuario" style="color: red; display: none;">Solo
                    se permiten letras y números.</span>
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" pattern="[A-Za-z]+" required>
                <span id="error-nombre" style="color: red; display: none;">Solo
                    se permiten letras.</span>
            </div>
            <div>
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" pattern="[A-Za-z]+" required>
                <span id="error-apellidos" style="color: red; display:
                    none;">Solo se permiten
                    letras.</span>
            </div>
            <div>
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" minlength="5" required>
                <span id="error-contraseña" style="color: red; display:
                    none;">La contraseña debe
                    tener al menos 5 caracteres.</span>
            </div>
            <div>
                <form method="post" action="inicio sesion.html">
                    <input type="submit" class="btn btn-primary" formaction="inicio sesion.html" value="Registrarse">
                </form>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-secondary"> ¿Volver a
                    <a href="{{ route('inicio') }}"> Inicio de sesion?</a>.</button>
            </div>
        </form>


</body>

</html>
