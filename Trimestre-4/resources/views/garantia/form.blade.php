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
                                    

<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    {{ Form::label('codigo') }}
    {{ Form::number('codigo', $garantia->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo', 'step' => 1]) }}
    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
</div>
        <div class="form-group">
            {{ Form::label('producto_servicio') }}
            {{ Form::text('producto_servicio', $garantia->producto_servicio, ['class' => 'form-control' . ($errors->has('producto_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Producto Servicio']) }}
            {!! $errors->first('producto_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo') }}
            {{ Form::text('vehiculo', $garantia->vehiculo, ['class' => 'form-control' . ($errors->has('vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo']) }}
            {!! $errors->first('vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('telefono') }}
    {{ Form::tel('telefono', $garantia->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono', 'pattern' => '[0-9]+']) }}
    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    {{ Form::label('fecha_vencimiento') }}
    {{ Form::date('fecha_vencimiento', $garantia->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Vencimiento', 'min' => date('Y-m-d', strtotime('+1 day'))]) }}
    {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    {{ Form::label('estado_garantia') }}
    {{ Form::select('estado_garantia', ['creado' => 'Creado', 'finalizado' => 'Finalizado'], $garantia->estado_garantia, ['class' => 'form-control' . ($errors->has('estado_garantia') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona el estado de la garantía']) }}
    {!! $errors->first('estado_garantia', '<div class="invalid-feedback">:message</div>') !!}
</div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('CREAR') }}</button>
    </div>
</div>
</div>
    </div>
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