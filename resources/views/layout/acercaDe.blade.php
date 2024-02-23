@extends('layout/template')
@include('glosario/sidebarWhite')

@section('contenido')

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Acerca De </h1>
            <p</p>
          </div>
          <div>

            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Acerca De</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-100">
            <div class="card">
              <h3 class="card-title"> </h3>
              
              <p style="text-align: center;"><img src="{{ asset('dist/images/autora.jpeg')}}" width="250" height="220" alt="Autora"></p>
                <p style="text-align: center;"> Jessica Olvera Gordillo </p>
                <p style="text-align: center;"> Ingenierìa en Software 5ºIS </p>
                <p style="text-align: center;">Universidad Politecnica de Bacalar </p>
              <p style="text-align: center;"><img src="{{ asset('dist/images/html.png')}}" width="150" height="150" alt="">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('dist/images/css.webp')}}" width="170" height="170" alt="">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ asset('dist/images/bootstrap.png')}}" width="150" height="120" alt=""></p>
                <p style="text-align:center;">
                  <a href="{{ url('glosario') }}" class="btn btn-primary btn-sm " role="button" >Regresar al inicio</a>

                </p>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection