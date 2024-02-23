@extends('layout/template')
@include('glosario/sidebar')

@section('contenido')


<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> {{  $term->nombre  }}</h1>
            <p</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">{{  $term->nombre  }}</a></li>
            </ul>
          </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                  <div class="card">
                    <h3 class="card-title"> {{  $term->nombre  }} </h3>
                    <hr>
                    <p>  {{ $term->definicion  }}</p>
                           
                    <p style="text-align: center; ">
                    <img  src="{{ asset($term->imagen) }}" width="170" height="110" alt="">
                    </p>

                    </div>
                    </div>

                    <div class="col-md-3 mb-5">
                      <div class="card">
                      <a href="{{ url('glosario/'.$term->id.'/edit') }}" class="btn btn-info btn-sm"><img src="{{ asset('dist/images/editar.png') }}" width="20" height="20" alt=""> &nbsp;Editar </a>
                    <br>
                    <div>
                          <form action="{{ url('glosario/'.$term->id) }}" method="POST">
                              @method("DELETE")
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"><img src="{{ asset('dist/images/eliminar.png') }}" width="20" height="20" alt=""> &nbsp;Eliminar</button>
                          </form>
                        </div>
                        
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
                            