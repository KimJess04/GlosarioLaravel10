<?php

use App\Http\Controllers\TerminoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/glosario');
});


//Vista de acercaDe
Route::get('/glosario/acercaDe', function () {
    return view('/layout.acercaDe');
});

//Vista de edit
/*Route::get('/glosario/editar', function () {
    return view('/glosario.editar');
});*/


Route::resource('glosario', TerminoController::class); //habilta el controlador de glosario con la ruta localhost:xxxx/glosario

