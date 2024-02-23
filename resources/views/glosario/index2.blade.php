@extends('layouts/template')

@section ('title', 'Glosario de Términos')

@section('contenido')


    <div class="wrapper">
    <!-- ENCABEZADO -->
      <header class="main-header">
          <nav class="navbar navbar-static-top"  style="color: white;"> 
            <a class="main-header hidden-print" href="index.php" style="font-family: Arial; font-size: 20px; text-align: center; padding-left: 40px; margin-bottom: 40px;"> Glosario Terminos </a>
            &nbsp;&nbsp;<img src="images/logo.png" width="150" height="50" alt=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universidad Politècnica de Bacalar  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Programación Cliente Servidor  &nbsp;&nbsp; &nbsp;&nbsp; Glosario Terminos.
          </nav>

      </header>
        
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
           
            <div class="pull-left info">
              <p>Jessica Olvera <br> 5°IS</p>
              <p ></p>
            </div>
            <div class="pull-left image"><img></div>
            <div class="pull-left image"><img></div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span> Conceptos </span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="cliente.html"><i class="fa fa-circle-o"></i> Cliente </a></li>
                <li><a href="servidor.html"><i class="fa fa-circle-o"></i> Servidor </a></li>
                <li><a href="centrales.html"><i class="fa fa-circle-o"></i> Sistemas de computadoras centrales</a></li>
                <li><a href="dedicadas.html"><i class="fa fa-circle-o"></i> Computadoras dedicadas </a></li>
                <li><a href="recursos.html"><i class="fa fa-circle-o"></i> Recursos compartidos </a></li>
                <li><a href="protocolos.html"><i class="fa fa-circle-o"></i> Protocolos asimétricos </a></li>
                <li><a href="encapsulacion.html"><i class="fa fa-circle-o"></i> Encapsulación de servicios </a></li>
                <li><a href="escalabilidad.html"><i class="fa fa-circle-o"></i> Escalabilidad</a></li>
                <li><a href="integridad.html"><i class="fa fa-circle-o"></i> Integridad</a></li>
                <li><a href="iaas.html"><i class="fa fa-circle-o"></i> Infrastructure as a Service (IAAS)</a></li>
                <li><a href="paas.html"><i class="fa fa-circle-o"></i> Platform as a Service (PAAS)</a></li>
                <li><a href="saas.html"><i class="fa fa-circle-o"></i> Software as a Service (SAAS)</a></li>
                <li><a href="nube.html"><i class="fa fa-circle-o"></i> Cómputo en la nube</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span> Acerca De... </span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="acercaDe.html"><i class="fa fa-circle-o"></i> Autora </a></li>
              </ul>
            </li>

          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-100">
            <div class="card">
              <h3 class="card-title"> </h3>
              <p>Elabora un sitio web para que presente un glosario de términos.
                Puede ser realizado en: </p>
                <li>HTML+CSS+JS</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>Bootstrap o TailwindCSS </li>
                
                
                <p>En la barra lateral izquierda, deben aparecer los términos o conceptos y en el área central las definiciones.</p>
                <p>En la sección de términos o conceptos, debe aparecer una opción al final, que diga: "Acerca de...", en el área 
                  central debe aparecer tus datos y las tecnologías que usaste para el mismo (con logos de las tecnologías)  
                  y debe estar tu foto o algún logo tuyo.</p>
                
                <p>Los conceptos a presentar son:</p>
                <li>Cliente</li>
                <li>Servidor</li>
                <li>Sistemas de computadoras centrales</li>
                <li>Computadoras dedicadas</li>
                <li>Recursos compartidos</li>
                <li>Protocolos asimétricos</li>
                <li>Encapsulación de servicios</li>
                <li>Escalabilidad</li>
                <li>Integridad</li>
                <li>Infrastructure as a Service (IAAS)</li>
                <li>Platform as a Service (PAAS)</li>
                <li>Software as a Service (SAAS)</li>
                <li>Cómputo en la nube</li>
                <br>
                
               <p>El encabezado debe tener el logo de la UPB, nombre de la Univesidad, nombre de la materia y el título de la actividad.</p> 
               <p>Entregar un pdf en forma de reporte donde presentes la funcionalidad de tu sitio.(Breve)</p>
               <p>Subir tu proyecto con todos los recursos (código, imágenes y exportación de base de datos si es que usa)</p>
               
                
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  

