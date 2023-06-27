<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Comentario</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .form-section {
            text-align: center;
            margin-top: 20px;
        }

        .form-section label {
            display: block;
            margin-bottom: 10px;
        }

        .form-section input[type="text"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
        }

        .form-section .btn-primary {
            display: block;
            padding: 6px 12px;
            font-size: 14px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
            width: 120px;
            margin: 0 auto;
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
                <a href="{{ route('puntuacion') }}">
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
                    <div class="bx bx-log-out"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></div>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <form action="{{ route('comments.update', $comment) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-section">
                <label for="comment">Edite el comentario:</label>
                <input type="text" id="comment" name="comment" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required
                    value="{{ $comment->comment }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>

</html>
