<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ url('assets/images/logo-full.png')}}" alt="" class="logo logo-lg">
                <img src="{{ url('assets/images/logo-abbr.png')}}" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/admin">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/admin/analytics">Analytics</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-cast"></i></span>
                        <span class="nxl-mtext">Reports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsSales">Sales Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsLeads">Leads Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsProject">Project Report</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/Reports/reportsTimesheets">Timesheets Report</a></li>
                    </ul>
                </li>

                {{--Lista de Marcas--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-tag"></i></span>
                        <span class="nxl-mtext">Marcas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('brands.index')}}">Ver Marcas</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('brands.create')}}">Criar Marcas</a></li>
                    </ul>
                </li>

                {{--Lista de Modelo--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-box"></i></span>
                        <span class="nxl-mtext">Modelos</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('models.index')}}">Ver Modelos</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('models.create')}}">Criar Modelos</a></li>
                    </ul>
                </li>

                {{--Lista de Combustíveis--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-droplet"></i></span>
                        <span class="nxl-mtext">Combustíveis</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('fuels.index')}}">Ver Combustíveis</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('fuels.create')}}">Criar Combustíveis</a></li>
                    </ul>
                </li>

                            {{--Lista de Cores--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-square"></i></span>
                        <span class="nxl-mtext">Cores</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('colors.index')}}">Ver Cores</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('colors.create')}}">Criar Cores</a></li>
                    </ul>
                </li>

                {{--Lista de Fornecedores--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Fornecedores</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('suppliers.index')}}">Ver Fornecedores</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('suppliers.create')}}">Criar Fornecedores</a></li>
                    </ul>
                </li>
                {{--Lista de Motoristas--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="fas fa-user-tie"></i></span>
                        <span class="nxl-mtext">Motoristas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('drivers.index')}}">Ver Motoristas</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('drivers.create')}}">Criar Motoristas</a></li>
                    </ul>

                {{--Lista de Clientes--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">Clientes</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('clients.index')}}">Ver Clientes</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('clients.create')}}">Criar Clientes</a></li>
                    </ul>
                </li>
                {{--Lista de Reservas--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-calendar"></i></span>
                        <span class="nxl-mtext">Reservas</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reserves.index')}}">Ver Reservas</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('reserves.create')}}">Criar Reservas</a></li>
                    </ul>
                </li>

                {{--Lista de Carros--}}
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-truck"></i></span>
                        <span class="nxl-mtext">Carros</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('cars.index')}}">Ver Carros</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="{{ route('cars.create')}}">Criar Carros</a></li>
                    </ul>
                </li>

            </ul>

            {{--<div class="card text-center">
                <div class="card-body">
                    <i class="feather-sunrise fs-4 text-dark"></i>
                    <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                    <p class="fs-11 my-3 text-dark">Duralux is a production ready CRM to get started up and running easily.</p>
                    <a href="javascript:void(0);" class="btn btn-primary text-dark w-100">Download Now</a>
                </div>
            </div>--}}
            
        </div>
    </div>
</nav>