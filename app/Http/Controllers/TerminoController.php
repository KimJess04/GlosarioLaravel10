<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Termino;
use Illuminate\Http\Request;

class TerminoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //Cargar los datos de los terminos en objeto $termino de la tabla 
         $terminos = Termino::all();

        //return view('glosario.index');
        //Habilitar la vista
        return view('glosario.index', ['terminos' => $terminos]); //en ruta glosario busca vista index

        
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Habilitar la vista de glosario.create
        return view('glosario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //Antes de guardar, laravel tiene reglas de validacion para el formulario
        $request ->validate([
            'concepto' => 'required|max: 50',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]); 
        // |max:80|

        //Si todos los datos son correctos entonces se guarda en la tabla de BD
        //Para guardar se integran los datos en un objeto llamado $concepto
        // (esto es debido a que las BD en laravel es por ORM)

        $termino = new Termino(); //se crea objeto
        // (nombre del campo de la tabla) -> (name del input)
        $termino-> nombre = $request->input('concepto');
        $termino-> definicion = $request->input('descripcion');
        //$termino->imagen = $request->input('imagen');
       

        // Redirecciona a una página de éxito o donde desees después de guardar
        

       
       
       
       
       //return redirect()->route('glosario.editFormat')->with('success', 'Término guardado correctamente.');


         // Validar la solicitud
    /*$request->validate([
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar que sea una imagen
    ]);

    */

    // Condicion para verificar si se esta cargando la img del formulario
    if($request->hasFile('imagen')){
        // Obtener el archivo
        $file = $request->file('imagen');
        // Guardar la carpeta de destino en una variable para después concatenar con la img
        $destino = 'dist/image/';
        // Asignar nombre a la imagen
        $fileName = $file->getClientOriginalName();
        // Mover la imagen a la carpeta de destino
        $uploadSuccess = $request->file('imagen')->move($destino, $fileName);
        $termino->imagen = $destino.$fileName;
    }
    $termino->save(); //Guardar registro en la BD*/

  /*  Termino::create($termino);
    return redirect()->route('glosario.index');*/

    //    Termino::create($request->all());
    $terminos = Termino::all();

    //return view('glosario.index');
    //Habilitar la vista
    //return view('glosario.index', ['terminos' => $terminos])->with('msg', 'Término guardado correctamente.');
     // cuando guarde, presentar un mensaje en la vista mensaje
    return view('glosario.mensaje', ['msg' => 'Término guardado correctamente']);

            


    //return redirect()->route('glosario.index')->with('success', 'Imagen cargada exitosamente.'); */

       
        
       
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $terminos = Termino::all();
        // Recuperar los datos del id en una variable que se mostrara y enviara a la vista descripcion
        $term = Termino::find($id);
        //Retornar vista del termino
        return view('glosario.descripcion', ['terminos' => $terminos], compact('term')); // El compact() sirve para enviar la variable a la vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) //int $id
    {
        //$terminos = Termino::all();
        // Recuperar los datos del id que se va a modificar y enviarlo a la vista edit
        $termino = Termino::find($id); // Buscar el id del alumno
        // Ahora enviamos a la vista de edit de los datos
        return view('glosario.editar', ['termino' => $termino]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Habilitar la actualización de los datos
        $request ->validate([
            'concepto' => 'required|max: 50',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]); 

        // Localizar el registro de alumnos para actualizarlo
        // Para guardar se integran los datos en un objeto llamado $alumno (debido a que las BD en laravel es por ORM)
        $termino = Termino::find($id);
        // (nombre del campo de la tabla) -> (name del input)
        $termino-> nombre = $request->input('concepto');
        $termino-> definicion = $request->input('descripcion');

        // Condicion para verificar si se esta cargando la img del formulario
    if($request->hasFile('imagen')){
        // Obtener el archivo
        $file = $request->file('imagen');
        // Guardar la carpeta de destino en una variable para después concatenar con la img
        $destino = 'dist/image/';
        // Asignar nombre a la imagen
        $fileName = $file->getClientOriginalName();
        // Mover la imagen a la carpeta de destino
        $uploadSuccess = $request->file('imagen')->move($destino, $fileName);
        $termino->imagen = $destino.$fileName;
    }

    $termino->save(); //Guardar registro en la BD*/
        // cuando guarde, presentar un mensaje en la vista mensaje
        return view('glosario.mensaje', ['msg' => 'Termino actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminamos el termino
        $term = Termino::find($id); // Buscar al alumno a eliminar
        $term->delete(); // Elimina
        return view('glosario.mensaje', ['msg' => 'Termino eliminado correctamente']);

        //return redirect('glosario');
    }
}
