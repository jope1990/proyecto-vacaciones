<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SistemaVacaciones</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Styles -->
    {!! Html::style('css/app.css') !!}
    @yield('style')
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body id="app-layout">

    <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
        <div class="container">
            <div class="navbar-header">
            <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>              
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- Sisvacaciones -->
                    Nutraceuticos
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if (!Auth::guest())
                <ul class="nav navbar-nav" >
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Empleados</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/worker/create') }}">Registrar Empleado</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/home') }}">Listar Empleados Activos</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/worker/retirados') }}">Listar Empleados Retirados</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Areas</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/area/create') }}">Crear Area</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/area') }}">Listar Areas</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vacacion</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/assign/create') }}">Asignar Vacacion</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/home/report') }}">Vacacion</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/home/report1') }}">Empleado</a></li>
                        </ul>
                    </li>
                </ul>
                @endif

            </div>
                           <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right navbar-dark">
                    <!-- Authentication Links -->
                    @if (!Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} 
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out "></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>     
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="js/main.js"></script>  
    @yield('javascript')
</body>
</html>
