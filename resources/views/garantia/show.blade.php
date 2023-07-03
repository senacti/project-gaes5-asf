@extends('layouts.app')

@section('template_title')
    {{ $garantia->name ?? "{{ __('Show') Garantia" }}
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/creargarantias.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <div class="sidebar close">
        <div class="logo-details">
        <img src="{{ asset('imagenes/iconodonspeedsfierro.JPG') }}" alt="Logo auto speed fierro">
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
                <a href="{{ route('comments.index') }}">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Califiquenos</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                <a href="{{ url('garantias') }}">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">GARANTIAS</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Don Speeds Fierro</div>
                        <div class="job">ADMINISTRADOR</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'>
            </i>
            <span class="text">Menu</span>

        </div>

        <section>

            <div class="container py-5" style="text-align: center;">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" style="background-color: white; color: rgb(0, 81, 255);">
                <BR>
                </BR>
                <BR>
                </BR>
                       <h2>ADMINISTRADOR</h2>
                       <img src="{{ asset('imagenes/user administrador.png') }}" alt="Logo administrador" style="width: 200px;">
                       <br>
                       <br>
                       <h5> <a href="{{ url('garantias') }}" style= "color:rgb(0, 81, 255)";; >*REGRESAR A LA SECCION DE  <br> GARANTIAS*</a></h5>
                    </div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-5" style="background: #C9C7C0 ; color: rgb(0, 81, 255) ">
                            <h2 style="text-align: center;">Datos Garantia</h2 >
                                <form action="ejemplo" method="get"> 
                                    
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                        <img src="{{ asset('imagenes/ttt.gif') }}" alt="Logo administrador" style="width: 100px;">  <span class= "card-title">{{ __ ('Don Speeds Fierro ') }} Garantia  </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('garantias.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $garantia->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Servicio:</strong>
                            {{ $garantia->producto_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo:</strong>
                            {{ $garantia->vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $garantia->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $garantia->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Garantia:</strong>
                            {{ $garantia->estado_garantia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
