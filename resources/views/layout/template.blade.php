
@section('contenido')

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css') }}">
    <link rel="icon" href="{{ asset('dist/images/descarga.jpg') }}" type="image/png">
    <!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
-->
    <title> Glosario Terminos </title>
   
  </head>

  <body class="sidebar-mini fixed">
    <div class="wrapper">
    <!-- ENCABEZADO -->
    <header class="main-header hidden-print"><a class="logo" href="{{url('glosario')}}">Glosario Términos</a>
          <nav class="navbar navbar-static-top"  style="color: white;"> 
           <a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <a class="main-header hidden-print" href="#" style="font-family: Arial; font-size: 20px; text-align: center; padding-left: 40px; margin-bottom: 40px;"> Glosario Terminos </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="{{ asset('dist/images/logo.png') }}" width="150" height="50" alt=""> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Universidad Politècnica de Bacalar  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             Programación Cliente Servidor  
             &nbsp;&nbsp; &nbsp;&nbsp; 
             Glosario Terminos.
             &nbsp;&nbsp; 
             <!--
             <div class="col-sm-2">
                <input class="form-control " type="search" placeholder="Buscar" aria-label="Search" >
                <button class="btn btn-success-light" type="submit" style=" border-radius: 80px;"><img src="{{ asset('dist/images/lupa.png')}}" alt="Bootstrap" width="30" height="30"></button>

             </div>
            -->
          </nav>
          
      </header>
        
    
     
        <div class="row">
          
         @yield('contenido') 

        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="{{ asset('dist/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/plugins/pace.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
  </body>
