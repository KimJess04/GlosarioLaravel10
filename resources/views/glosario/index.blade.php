@extends('layout/template')
@include('glosario/sidebar')

@section('contenido')

<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p></p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>

    <div class="row">
          <div class="col-md-7">
            <div class="card">
              <h2 class="card-title"> <p>Glosario de términos. </h2>
             
                <h3>Realizado en:</h3>  
                <h4><li>Laravel</li></h4>
               
                <br>
                
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

            <div class="col-md-5">
              <div class="card">
                <h3 class="card-title" style="text-align:center;">Agregar nuevo concepto  &nbsp;
                   <a href="{{ url('glosario/create') }}" class="btn btn-sucess btn-sm mb-3"><img src="{{ asset('dist/images/añadir.png') }}" width="30" height="30" alt=""> </a>
                </h3>
                
              </div>

              <div class="card">
                <h3 class="card-title" style="text-align:center;">Editar concepto  &nbsp;
                   <a href="{{ url('glosario/editar') }}" class="btn btn-sucess btn-sm mb-3"><img src="{{ asset('dist/images/editar.png') }}" width="30" height="30" alt=""> </a>
                </h3>
                
              </div>
          </div>

          </div>
          </div>
          

@endsection