<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index cliente</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="{{ asset('img/Carro.jpg') }}" alt="">
            <span class="logo_name">Don-Speed's-Fierro</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="{{ route('agendar') }}">
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
                <a href="{{ route('contactos') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Contactos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('comments.index') }}">
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="bx bx-log-out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></div>                </div>
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
