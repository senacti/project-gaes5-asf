<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesion</title>
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
        <h2>Iniciar Sesión</h2>
        <form id="login-form" action="#" method="post">
            <div class="form-group">
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="usuario" name="usuario" pattern="[A-Za-z0-9]+" required>
                <div class="error" id="username-error"></div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
                <div class="error" id="password-error"></div>
            </div>
            <form method="post" action="registro.html">
                <input type="submit" class="btn btn-primary" formaction="registro.html" value="Iniciar Sesión">
            </form>
        </form>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-secondary">¿No tienes una
                cuenta? <a href="{{ route('registro') }}">Regístrate aquí</a>.</button>
        </div>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-secondary">¿Olvido su
                contraseña? <a href="#">Recuperar aqui</a>.</button>
        </div>
    </div>
</body>

</html>
