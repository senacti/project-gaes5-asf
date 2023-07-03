<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background: #0D47A1;
        }

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
        }

        /* Header */

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 40px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            color: #ffffd5;
            font-size: 2em;
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Lora', serif;
            font-weight: 600;

        }

        header .navbar {
            position: relative;
            display: flex;
        }

        header .navbar li {
            list-style: none;
            margin-left: 30px;
        }

        header .navbar li a {
            text-decoration: none;
            color: #ffffd5;
            font-weight: 600;
            padding: 10px;
            transition: 0.3s;
            font-size: 0.9em;
            text-transform: uppercase;
        }

        header .navbar li a:hover {
            color: #FFEA00;
        }

        /* contenido */

        .contenido {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 30px;

        }

        .contenido .tituloBox {
            position: relative;
            max-width: 600px;
        }

        .contenido .tituloBox h2 {
            font-size: 4.5em;
            text-transform: uppercase;
            color: #ffffd5;
            line-height: 1.2;
        }

        .contenido .tituloBox p {
            font-size: 1.8em;
            line-height: 1.5;
            color: #ffffd5;
            font-family: 'Lora', serif;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .contenido .tituloBox a {
            text-decoration: none;
            text-transform: uppercase;
            color: #0D47A1;
            background: #ffde59;
            padding: 10px 20px;
            margin-left: 30px;
            border-radius: 20px;
            letter-spacing: 2px;
            transition: 0.3s;
        }

        .contenido .tituloBox a:hover {
            color: #FFEA00;
            background: #ffffd5;
        }

        .contenido .imgBox img {
            width: 700px;
        }

        /* circulo */

        .circulo {
            position: absolute;
            top: 0;
            left: 0;
            background: #ffffd5;
            clip-path: circle(650px at right 750px);
            width: 100%;
            height: 100%;
        }

        /* Redes Sociales*/

        .redesSociales {
            position: absolute;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 100px 30px;
            list-style: none;
        }

        .redesSociales li {
            padding: 10px;
        }

        .redesSociales li a {
            color: #0D47A1;
            font-size: 1.5em;
            transition: 0.3s;
        }

        .redesSociales li a:hover {
            color: #ffde59;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <section>
            <div class="circulo"></div>
            <header>
                <a href="#" class="logo">SERVITECA</a>
                <ul class="navbar">
                    <li><a href="">INICIO</a></li>
                    <li><a href="#">CONTACTANOS</a></li>
                    <li><a href="{{ route('login') }}">INICIAR SESION</a></li>
                    <li><a href="{{ route('register') }}">REGISTRARSE</a></li>


                </ul>
            </header>

            <div class="contenido">
                <div class="tituloBox">
                    <h2>AUTO<br></h2>
                    <h2>SPEED<br></h2>
                    <h2>FIERRO'S<br></h2>
                    <p>contamos con un servicio de ayuda en el <br> mantenimiento, reparaciòn y servicios<br>
                        relacionados
                        en autos.</p>
                    <a href="#">SERVICIOS</a>
                </div>
                <div class="imgBox">
                    <img src="{{ asset('img/auto4.png') }}" href="" alt="">
                </div>
            </div>
            <ul class="redesSociales">
                <li><a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a></li>
            </ul>
        </section>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
    </div>
    </div>
</body>

</html>