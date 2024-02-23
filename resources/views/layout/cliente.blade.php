@extends('layouts/template')


@section('contenido')

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Cliente </h1>
            <p</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#"> Cliente</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="card">
              <h3 class="card-title"> Cliente </h3>
              <p>Un cliente es un sistema que solicita servicios o datos de un servidor.</p>
              <p>Un cliente es un ordenador o software que accede a un servidor y recupera servicios especiales o datos de él. Es tarea del cliente estandarizar las solicitudes, transmitirlas al servidor y procesar los datos obtenidos para que puedan visualizarse en un dispositivo de salida como una pantalla. </p>
              <p>Un cliente no ejecuta tareas de servidor, sino que es simplemente un elemento intermedio. Los clientes típicos son los navegadores web o los clientes de correo electrónico.</p>
              <p> En el contexto de la web, un navegador web es un ejemplo común de cliente. Cuando accedes a un sitio web, el navegador actúa como cliente y solicita las páginas web al servidor.</p>
            
              <p style="text-align: center; ">
                <img   src="{{ asset('dist/images/cliente.png')}}" width="170" height="110" alt="">
                <img src="{{ asset('dist/images/clientee.png')}}" width="170" height="110" alt="">

              </p>

            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <p>Jessica Olvera Gordillo</p>
            </div>
          </div>
        </div>
      </div>
    </div>
   @endsection