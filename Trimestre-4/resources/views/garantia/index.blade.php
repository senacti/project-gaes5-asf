@extends('layouts.app')

@section('template_title')
    Garantia
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
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
 <div class="container my-4" style="margin-left: 0;">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4" style="background-color: white;
           color:  rgb(0, 81, 255);;">
        
               <h2>ADMINISTRADOR</h2>
               <img src="{{ asset('imagenes/user administrador.png') }}" alt="Logo de administrador" style="width: 150px;">
               <br>
               <br>
               <h5>ingresa un codigo</h5>

                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                  <br>
                  <h4>¡PARA GESTIONAR LAS GARANTIAS DALE CLICk A LOS BOTONES INDICANDO LA ACCION QUE DESEAS REALIZAR!</h4> 
                  <br>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-4 " style="background: white; color: rgb(0, 81, 255);;">
                <h2 style="text-align: center;">SECCION GARANTIAS</h2 >
                    <h4 style="text-align: center;">todas las garantias</h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Garantia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('garantias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear garantia') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Producto Servicio</th>
										<th>Vehiculo</th>
										<th>Telefono</th>
										<th>Fecha Vencimiento</th>
										<th>Estado Garantia</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($garantias as $garantia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $garantia->codigo }}</td>
											<td>{{ $garantia->producto_servicio }}</td>
											<td>{{ $garantia->vehiculo }}</td>
											<td>{{ $garantia->telefono }}</td>
											<td>{{ $garantia->fecha_vencimiento }}</td>
											<td>{{ $garantia->estado_garantia }}</td>

                                            <td>
                                                <form action="{{ route('garantias.destroy',$garantia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('garantias.show',$garantia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('VISUALIZAR') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('garantias.edit',$garantia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('EDITAR') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('ELIMINAR') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $garantias->links() !!}
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
@endsection
