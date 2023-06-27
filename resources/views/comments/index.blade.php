<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentarios</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .comment-table {
            width: 100%;
            border-collapse: collapse;
        }

        .comment-table th,
        .comment-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .comment-table th {
            background-color: #f2f2f2;
        }

        .comment-actions a {
            margin-right: 5px;
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .pdf-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 5px;
        }

        .create-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
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
                    <div class="home-content">
                        <i class='bx bx-menu'></i>
                        <span class="text">Reseñas</span>
                    </div>
                    <table class="comment-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Comentario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td class="comment-actions">
                                        <a href="{{ route('comments.edit', $comment) }}"
                                            class="btn btn-primary">Editar</a>
                                        <form action="{{ route('comments.destroy', $comment) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        <a href="{{ route('comments.create') }}" class="create-btn">Crear nuevo comentario</a>
                        <a href="{{ route('comments.generatePDF') }}" class="pdf-btn">Generar PDF</a>
                    </div>

                    <!-- Resto del contenido omitido por brevedad -->
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
