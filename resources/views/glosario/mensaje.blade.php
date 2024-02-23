@extends('layout/template')
@include('glosario/sidebarWhite')

@section('title', 'Glosario')
@section('contenido')
<main>
<div class="content-wrapper">
<div class="card">
  <div class="card-body">
  <span class="border border--danger">
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        <hr>
        <p class="mt-4">
            <a href="{{ url('glosario') }}" class="btn btn-primary btn-sm " role="button" >Regresar al inicio</a>
        </p>
    </div>
    </span>
    </div>
    </div>

 </div>
</main>
