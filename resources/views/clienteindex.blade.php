<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index cliente</title>
    <link rel="stylees" href="{{ asset('css/estilos.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        /* Google Fonts Import Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        /* Menu desplegable */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background: #2617cc;
            z-index: 100;
            transition: all 0.5s ease;
        }

        .sidebar.close {
            width: 78px;
        }

        img {
            width: 40px;
            margin: 15px;
        }

        .sidebar .logo-details {
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .sidebar .logo-details i {
            font-size: 30px;
            color: #fff;
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
        }

        .sidebar .logo-details .logo_name {
            font-size: 22px;
            color: #fff;
            font-weight: 600;
            transition: 0.3s ease;
            transition-delay: 0.1s;
        }

        .sidebar.close .logo-details .logo_name {
            transition-delay: 0s;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links {
            height: 100%;
            padding: 30px 0 150px 0;
            overflow: auto;
        }

        .sidebar.close .nav-links {
            overflow: visible;
        }

        .sidebar .nav-links::-webkit-scrollbar {
            display: none;
        }

        .sidebar .nav-links li {
            position: relative;
            list-style: none;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li:hover {
            background: #2617cc;
        }

        .sidebar .nav-links li .iocn-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar.close .nav-links li .iocn-link {
            display: block
        }

        .sidebar .nav-links li i {
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li.showMenu i.arrow {
            transform: rotate(-180deg);
        }

        .sidebar.close .nav-links i.arrow {
            display: none;
        }

        .sidebar .nav-links li a {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .sidebar .nav-links li a .link_name {
            font-size: 18px;
            font-weight: 400;
            color: #fff;
            transition: all 0.4s ease;
        }

        .sidebar.close .nav-links li a .link_name {
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links li .sub-menu {
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #2617cc;
            display: none;
        }

        .sidebar .nav-links li.showMenu .sub-menu {
            display: block;
        }

        .sidebar .nav-links li .sub-menu a {
            color: #fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li .sub-menu a:hover {
            opacity: 1;
        }

        .sidebar.close .nav-links li .sub-menu {
            position: absolute;
            left: 100%;
            top: -10px;
            margin-top: 0;
            padding: 10px 20px;
            border-radius: 0 6px 6px 0;
            opacity: 0;
            display: block;
            pointer-events: none;
            transition: 0s;
        }

        .sidebar.close .nav-links li:hover .sub-menu {
            top: 0;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
        }

        .sidebar .nav-links li .sub-menu .link_name {
            display: none;
        }

        .sidebar.close .nav-links li .sub-menu .link_name {
            font-size: 18px;
            opacity: 1;
            display: block;
        }

        .sidebar .nav-links li .sub-menu.blank {
            opacity: 1;
            pointer-events: auto;
            padding: 3px 20px 6px 16px;
            opacity: 0;
            pointer-events: none;
        }

        .sidebar .nav-links li:hover .sub-menu.blank {
            top: 50%;
            transform: translateY(-50%);
        }

        .sidebar .profile-details {
            position: fixed;
            bottom: 0;
            width: 260px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #2617cc;
            padding: 12px 0;
            transition: all 0.5s ease;
        }

        .sidebar.close .profile-details {
            background: none;
        }

        .sidebar.close .profile-details {
            width: 78px;
        }

        .sidebar .profile-details .profile-content {
            display: flex;
            align-items: center;
        }

        .sidebar .profile-details img {
            height: 52px;
            width: 52px;
            object-fit: cover;
            border-radius: 16px;
            margin: 0 14px 0 12px;
            background: #1d1b31;
            transition: all 0.5s ease;
        }

        .sidebar.close .profile-details img {
            padding: 10px;
        }

        .sidebar .profile-details .profile_name,
        .sidebar .profile-details .job {
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            white-space: nowrap;
        }

        .sidebar.close .profile-details i,
        .sidebar.close .profile-details .profile_name,
        .sidebar.close .profile-details .job {
            display: none;
        }

        .sidebar .profile-details .job {
            font-size: 12px;
        }

        .home-section {
            position: relative;
            background: #E4E9F7;
            height: 100vh;
            left: 260px;
            width: calc(100% - 260px);
            transition: all 0.5s ease;
        }

        .sidebar.close~.home-section {
            left: 78px;
            width: calc(100% - 78px);
        }

        .home-section .home-content {
            height: 60px;
            display: flex;
            align-items: center;
        }

        .home-section .home-content .bx-menu,
        .home-section .home-content .text {
            color: #11101d;
            font-size: 35px;
        }

        .home-section .home-content .bx-menu {
            margin: 0 15px;
            cursor: pointer;
        }

        .home-section .home-content .text {
            font-size: 26px;
            font-weight: 600;
        }

        @media (max-width: 400px) {
            .sidebar.close .nav-links li .sub-menu {
                display: none;
            }

            .sidebar {
                width: 78px;
            }

            .sidebar.close {
                width: 0;
            }

            .home-section {
                left: 78px;
                width: calc(100% - 78px);
                z-index: 100;
            }

            .sidebar.close~.home-section {
                width: 100%;
                left: 0;
            }
        }

        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background: -webkit-gradient(linear, left top, right top, from(mediumpurple), to(lightsalmon));
            background: -webkit-linear-gradient(left, mediumpurple, lightsalmon);
            background: -o-linear-gradient(left, mediumpurple, lightsalmon);
            background: linear-gradient(to right, mediumpurple, lightsalmon);
        }

        /* Agendamiento */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        h1 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input,
        select {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        /* Califiquenos */
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            font-size: 30px;
            color: #ddd;
            padding: 5px;
            cursor: pointer;
        }

        .rating label:hover,
        .rating label:hover~label,
        .rating input[type="radio"]:checked~label {
            color: #FFD700;
        }
    </style>
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="{{ asset('img/Carro.jpg') }}" alt="">
            <span class="logo_name">Don-Speed's-Fierro</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="{{ asset('Agendar.html') }}">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Agendar</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">servicios</span>
                    </a>
                </div>
            </li>
            <li>
                <a href="{{ asset('Contactenos.html') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Contactos</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('Califiquenos.html') }}">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Califiquenos</span>
                </a>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Don Speeds Fierro</div>
                        <div class="job">Cliente</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Menu</span>
        </div>
        <section>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('img/mantenimiento.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">Mantenimiento preventivo</h5>
                            <p class="card-text">En nuestra serviteca ofrecemos servicios de
                                mantenimiento preventivo para mantener su vehículo en buen
                                estado y evitar problemas futuros.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('img/cambio aceite.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cambio de aceite y filtros</h5>
                            <p class="card-text">Es importante realizar el cambio de aceite
                                y filtros de manera regular para garantizar el correcto
                                funcionamiento del motor de su vehículo. En nuestra serviteca
                                brindamos este servicio con productos y herramientas de
                                calidad para asegurar una operación óptima.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('img/Frenos.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Reparación de frenos</h5>
                            <p class="card-text">La seguridad es nuestra prioridad, por lo
                                que ofrecemos servicios de reparación y mantenimiento de
                                frenos para asegurar un frenado seguro y confiable de su
                                vehículo.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('img/alineacion.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alineación y balanceo</h5>
                            <p class="card-text">Una alineación y balanceo adecuado es clave
                                para una conducción suave y segura, así como para prevenir el
                                desgaste prematuro de los neumáticos. En nuestra serviteca
                                ofrecemos este servicio para garantizar una conducción segura
                                y confortable.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('img/cambio_neumaticos.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cambio de neumáticos</h5>
                            <p class="card-text">Contamos con una amplia variedad de marcas
                                y modelos de neumáticos, y ofrecemos servicios de instalación
                                y equilibrado de los mismos para asegurar una conducción
                                segura y confiable. Además, nuestros expertos pueden
                                asesorarle en la selección de los neumáticos más adecuados
                                para su vehículo y su presupuesto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('img/taller avanzado.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Servicio de diagnóstico y reparación de
                                averías</h5>
                            <p class="card-text">En nuestra serviteca contamos con
                                herramientas y equipos de diagnóstico especializados para
                                detectar y reparar averías en su vehículo. Nuestros técnicos
                                altamente capacitados pueden identificar y solucionar
                                problemas mecánicos, eléctricos y electrónicos en su vehículo
                                de manera rápida y eficiente, brindándole la tranquilidad y
                                seguridad de que su automóvil está en buenas manos.</p>
                        </div>
                    </div>
                </div>
        </section>
    </section>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>
</body>

</html>
