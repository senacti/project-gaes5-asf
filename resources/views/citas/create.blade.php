<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendar</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <script src="{{ asset('js/general.js') }}"></script>
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
                    <a href="{{ route('citas.index') }}">
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
                <a href="{{ route('puntuacion') }}">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Califiquenos</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="{{ url('garantias') }}">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Garantias</span>
                    </a>
                </div>
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
                    <div class="bx bx-log-out"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></div>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Calendario</span>
        </div>
        <div class="container">
            <h1>Agendar Servicio</h1>
            <form action="{{ route('citas.store') }}" method="POST">
                @csrf
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="tipo_servicio">Tipo de Servicio:</label>
                <select id="tipo_servicio" name="tipo_servicio" required>
                    <option value="">Seleccionar</option>
                    <option value="Mantenimiento preventivo">Mantenimiento preventivo</option>
                    <option value="Cambio de aceite y filtros">Cambio de aceite y filtros</option>
                    <option value="Reparación de frenos">Reparación de frenos</option>
                    <option value="Alineación y balanceo">Alineación y balanceo</option>
                    <option value="Cambio de neumáticos">Cambio de neumáticos</option>
                    <option value="Servicio de diagnóstico y reparación de averías">Servicio de diagnóstico y reparación
                        de averías</option>
                </select>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" min="{{ date('Y-m-d') }}" required>
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required>
                <button type="submit">Agendar</button>
            </form>
        </div>
        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", () => {
                sidebar.classList.toggle("close");
            });
        </script>
    </section>
</body>

</html>
