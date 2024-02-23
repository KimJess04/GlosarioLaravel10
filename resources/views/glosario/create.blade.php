@extends('layout/template')
@include('glosario/sidebarWhite')

@section ('title', 'Nuevo Concepto')

@section('contenido')

<div class="content-wrapper">
<div class="card">
  <div class="card-body">
  <span class="border border--danger">
<div class="contenido py-3" >
    <br>
        <h2 style="text-align: center;"> Nuevo Concepto  </h2>
        <hr>

        @if($errors->any())
        <div class="alert alert-warning" role="alert">
            <!-- Datos incompletos -->
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error}} </li>
                @endforeach
            </ul>
            
        </div>
        @endif

        <!-- Formulario de registro de los datos del termino -->
        <form action="{{ route('glosario.store') }}" method="post" enctype="multipart/form-data"> <!-- PARA SUBIRDATOS DE TIPO FILE NECESITAMOS USAR enctype="multipart/form-data" -->
        @csrf

        <div class="row mb-4" style="text-align:center;">
            <label for="concepto" class="col-sm-4 col-form-label" style="font-size: 18px; text-align:center;"> Concepto: </label>
            <div class="col-sm-4 mt-10">
                <input type="text" name="concepto" id="concepto" class="form-control"  value=" {{ old('concepto') }} " required>
                <br>
            </div>
        </div>

       <!-- <div class="row mt-4 mb-6" style="">
            <label for="descripcion" class="col-sm-4 col-form-label" style="font-size: 18px; text-align:center;" > Descripción: </label>
            <div class="col-sm-4 "> -->
                <!-- <input type="text" name="descripcion" id="descripcion" class="form-control" value=" {{ old('descripcion') }} " required> -->
                <!-- <textarea class="block w-full rounded-md border-gray-300 bg-white shadow-sm transition-colors duration-300 focus:ring-opacity-50 dark:bg-gray-600 dark:bg-gray-800 dark:text-white dark:focus:border-indigo-300 dark:focus:ring dark:focus:ring-indigo-200 dark:focus:ring-opacity-50"
                    placeholder=""
                    name="descripcion" id="descripcion" cols="50" rows="5"> {{ old('descripcion') }} 
                </textarea>
                <br>
        </div> -->

        <div class="row mt-4 mb-6" style="">
            <label for="descripcion" class="col-sm-4 col-form-label" style="font-size: 18px; text-align:center;"> Descripción: </label>
            <div class="col-sm-4 ">
                <textarea class="block w-full rounded-md border-gray-300 bg-white shadow-sm transition-colors duration-300 focus:ring-opacity-50 dark:bg-gray-600 dark:bg-gray-800 dark:text-white dark:focus:border-indigo-300 dark:focus:ring dark:focus:ring-indigo-200 dark:focus:ring-opacity-50" 
                placeholder="" name="descripcion" id="descripcion" cols="50" rows="5">{{ old('descripcion') }}</textarea>
                <br>
            </div>
        </div>

        <div class="row mt-4" style="text-align:center;">
        <br>
        <div class="grid grid-cols-1 mt-5 mx-7" >
            <img id="imagenSeleccionada" style="max-height: 300px;" >
        </div>
        </div>

        
        <div class="row mt-4" style="text-align:center;">
        <br>
            <label for="imagen" class="col-sm-4 col-form-label" style="font-size: 18px; text-align:center;"> Imagen: </label>
            <div class="col-sm-4 mt-4">
                <input type="file" name="imagen" id="imagen" class="form-control" value=" {{ old('imagen') }} " required>
            </div>
        </div>   

        <!-- PARA SUBIR ARCHIVOS IMAGENES 
        <form action="" method="POST">
            @csrf
            <br>
            <label for="imagen" class="col-sm-4 col-form-label" style="font-size: 18px; text-align:center;"> Imagen: </label>
            <div class="col-sm-4 mt-4">

            <div class="form-group">
                <input type="file" name="imagen" id="imagen" class="form-control" value=" {{ old('imagen') }} " required>
            </div>
            </div>

        </form>-->

        <p class="mt-8" style="text-align: center;">
        <br> <br>
            <button type="submit" class="btn btn-success btn-sm">Añadir concepto</button>

            &nbsp; &nbsp; &nbsp; &nbsp; 

            <a href="{{ url('glosario') }}" class="btn btn-primary btn-sm " role="button" >Regresar al inicio</a>
        </p>


        </form>
       
    </div>
    </span>
    </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e){
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) =>{
                $('#imagenSeleccionada').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script> 