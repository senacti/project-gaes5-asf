<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion</title>
    <!-- Styles -->
    <style>
        header {
    background-color: #004aad;
    display: flex;
    margin: auto;
}

header img {
    height: 50px;
    border: 1px solid black;
    margin: 15px 10px;
}

header article {
    margin: 15px 10px;
    color: #ffffd5;
    text-align: center;
    font-size: 20px;
}

body {
    font-family: "Courier New";
}

* {
    margin: 0px;
    padding: 0px;
}

#header {
    align-items: center;
    background-color: #ffde59;
    font-size: 20px;
    margin: auto;
    width: 500px;
}

ul,
ol {
    list-style: none;
}

.nav {
    width: 500px;
    margin: 0 auto;
}

.nav>li {
    float: left;
}

.nav li a {
    background-color: #ffea00;
    color: #000000;
    text-decoration: none;
    text-decoration-line: underline;
    padding: 10px 13.45px;
    display: block;
    margin: 0 auto;
    border: 1px solid #000000;

}

.nav li a:hover {
    background-color: #ffff8d;
}

.nav li ul {
    display: none;
    position: absolute;
    min-width: 140px;
}

.nav li:hover>ul {
    display: block;
}

.nav li ul li {
    position: relative;
}

.nav li ul li ul {
    position: relative;
    right: -140px;
    top: 0px;
}

.nav li ul li ul {
    right: -140px;
    top: 0px;
}

.cuerpo article {
    margin: 35px 10px;
    display: flex;

}

.cuerpo p {
    padding: 10px 200px 20px 50px;
    text-align: center;
    font-size: 20px;
    margin: 7px 200px 7px 35px;
}

.cuerpo img {
    width: 350px;
    height: 350px;
    margin: 15px 35px;
    border: 10px solid #0d47a1;
}

.cuerpo aside {
    display: flex;
    margin: 35px 10px;
    font-size: 20px;

}

.cuerpo .fin {
    padding: 10px 200px 20px 50px;
    text-align: center;
    font-size: 20px;
    margin: 7px 200px 7px 35px;
}

.cuerpo b {
    font-size: 45px;
    color: #0d47a1;
}

.cuerpo button {
    align-content: center;
    width: 550px;
    background-color: #ffea00;
    border: 3px solid #0d47a1;
    margin: 50px 100px 50px 50px;
    font-size: 20px;
}
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('img/Carro.jpg') }}" alt="">
        <article class="intro">
            <b> Bienvenido, <br> a DonSpeedsFierro </b>
        </article>
        <div id="header">
            <nav>
                <ul class="nav">
                    <li><a href="{{ route('dashboard') }}"><b>Inicio</b></a></li>
                    <li><a href=""><b>Servicios</b></a>
                        <ul>
                            <li><a href=""> Mecánica básica</a>
                                <ul>
                                    <li><a href="">Mecánica básica </a></li>
                                    <li><a href=""> Alineación y Balanceo
                                        </a></li>
                                    <li><a href=""> Cambio de Aceite </a></li>
                                    <li><a href=""> Cambio de Frenos </a></li>
                                    <li><a href="">Sincronización </a></li>
                                </ul>
                            <li><a href="">Mecánica Especializada</a>
                                <ul>
                                    <li><a href=""> Aire Acondicionado</a></li>
                                    <li><a href=""> Amortiguadores </a></li>
                                    <li><a href=""> Correa de
                                            Repartición </a></li>
                                    <li><a href=""> Electricidad y
                                            Electrónica </a></li>
                                    <li><a href=""> Kit de embrague </a></li>
                                </ul>
                            <li><a href="">Revisiones automotriz</a>
                                <ul>
                                    <li><a href=""> Revisiones
                                            Automotriz </a></li>
                                    <li><a href=""> Diagnóstico
                                            Automotriz </a></li>
                                    <li><a href=""> Peritaje </a></li>
                                    <li><a href=""> Revisión por
                                            Kilometraje </a></li>
                                </ul>
                            <li><a href="">Estética Automotriz</a>
                                <ul>
                                    <li><a href=""> Latonería y
                                            Pintura </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=""><b>Acerca de</b></a>
                        <ul>
                            <li><a href="{{ route('inicio') }}">Cotizar</a></li>
                            <li><a href="">A domicilio</a></li>
                            <li><a href="{{ route('inicio') }}">Agendar</a></li>
                            <li><a href="">Sobre nosotros</a></li>
                        </ul>
                    </li>
                    <li><a href=""><b>Contacto</b></a>
                        <ul>
                            <li><a href="">Correo Electrónico</a></li>
                            <li><a href="">Numero de celular</a></li>
                        </ul>
                </ul>
            </nav>
        </div>
    </header>
    <div class="cuerpo">
        <article>
            <p>
                <br>
                <br>
                En nuestra serviteca, nos esforzamos por
                ofrecer
                a nuestros clientes un servicio de alta
                calidad
                que les garantice la satisfacción y
                confianza al
                momento de llevar su vehículo a nuestras
                instalaciones. Nos enorgullece contar con un
                equipo altamente capacitado de técnicos y
                mecánicos, que están siempre dispuestos a
                brindar un excelente servicio al cliente y
                resolver cualquier duda o problema que
                puedan
                tener. Además, utilizamos equipos y
                herramientas
                modernas y de alta calidad para garantizar
                que
                las reparaciones y mantenimientos se
                realicen de
                forma eficiente y efectiva.
            </p>
            <img src="{{ asset('img/apreton.jpg') }}" alt="">
        </article>
        <aside>
            <p class="fin">
                <b> Agendamiento </b> <br> <br>
                Desde el momento en que agendan una cita con
                nosotros, nos esforzamos por brindar un
                servicio eficiente y de primera clase, para
                que nuestros clientes puedan volver
                rápidamente a la carretera con la seguridad
                y confianza de que su vehículo está en
                buenas manos.
            </p>
            <button>
                <a href="{{ route('inicio') }}">Agende de inmediato <br>
                    presionando aqui</a>
            </button>
        </aside>
    </div>
</body>

</html>
