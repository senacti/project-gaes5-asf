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
        input[type="password"],
        input[type="email"] {
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
        <h2>Registrarse</h2>
        <form id="register-form" action="{{ route('store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="mb-3 center-button">
                <input type="submit" class="col-md-3 btn btn-primary" value="Register">
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-secondary"> ¿Volver a
                    <a href="{{ route('login') }}"> Inicio de sesion?</a>.</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
