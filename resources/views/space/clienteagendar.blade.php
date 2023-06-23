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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="{{ route('clienteindex') }}">
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
                <a href="{{ route('calificacion') }}">
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
            <span class="text">Calendario</span>
        </div>
        <div class="container">
            <h1>Agendar Servicio</h1>
            <form>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="type">Tipo de Servicio:</label>
                <select id="type" name="type" required>
                    <option value="">Seleccionar</option>
                    <option value="Mantenimiento preventivo">Mantenimiento preventivo</option>
                    <option value="Cambio de aceite y filtros">Cambio de aceite y
                        filtros</option>
                    <option value="Reparación de frenos">Reparación de frenos</option>
                    <option value="Alineación y balanceo">Alineación y balanceo</option>
                    <option value="Cambio de neumáticos">Cambio de neumáticos</option>
                    <option value="Servicio de diagnóstico y reparación de
                averías">Servicio de
                        diagnóstico y reparación de
                        averías</option>
                </select>
                <label for="date">Fecha:</label>
                <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
                <label for="time">Hora:</label>
                <input type="time" id="time" name="time" required>
                <button type="submit">Agendar</button>
            </form>
        </div>
        <script src="script.js"></script>
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
