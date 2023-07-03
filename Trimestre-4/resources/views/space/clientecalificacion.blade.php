<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Califiquenos</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
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
                        <span class="link_name">Agendamiento</span>
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
            <span class="text">Menu</span>
        </div>
        <div class="rating">
            <input type="radio" id="star5" name="rating" value="5">
            <label for="star5" title="Excelente">★</label>
            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4" title="Muy bueno">★</label>
            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3" title="Bueno">★</label>
            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2" title="Regular">★</label>
            <input type="radio" id="star1" name="rating" value="1">
            <label for="star1" title="Malo">★</label>
        </div>

        <form>
            <label for="comment">Comentario:</label>
            <input type="text" id="name" name="name" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" required>
            <button type="submit">Enviar</button>
        </form>
        <br>
        <br>
        <br>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Ingrese Un Archivo De Ser Necesario</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
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
