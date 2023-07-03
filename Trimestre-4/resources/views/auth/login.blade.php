<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .nserviteca {
            display: flex;
            color: #0d47a1;
            font-size: 24px;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #0d47a1;
            padding-bottom: 10px;
            background-color: #ffffff;
        }

        .nserviteca .img {
            width: 80px;
            height: 80px;
            text-align: right;
            margin-right: 20px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #0d47a1;
        }

        .container {
            background-color: #ffffff;
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

<body>
    <header>
        <div class="nserviteca">
            <div class="imagen">
                <img src="{{ asset('img/Carro.jpg') }}" class="img" alt="">
            </div>
            <h1>DON SPEED'S FIERRO</h1>
        </div>
    </header>

    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form id="login-form" action="{{route('authenticate')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Dirección de correo:</label>
                <input type="text" id="email" name="email" required>
                <div class="error" id="username-error"></div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <div class="error" id="password-error"></div>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>    
        </form>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-secondary">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>.</button>
        </div>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-secondary">¿Olvidó su contraseña? <a href="#">Recuperar aquí</a>.</button>
        </div>
    </div>
</body>

</html>
