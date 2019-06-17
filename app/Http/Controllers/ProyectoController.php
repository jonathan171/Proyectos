<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\tipoRepositorio;
use App\estado;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the proyectos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $autor = $request->get('autor');
        $titulo = $request->get('titulo');
        $fecha = $request->get('fecha');
        $request->session()->forget('proyecto');
        $proyectos = Proyecto::orderBy('ID','DESC')->autor($autor)->titulo($titulo)->fecha($fecha)->paginate(3);
        return view('contenido.contenido',compact('proyectos',$proyectos));
    }

    /**
     * Show the step 1 Form for creating a new proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $tipos=tipoRepositorio::all();
        $proyecto = $request->session()->get('proyecto');
        return view('contenido.create-step1',compact('proyecto','tipos'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {
        // 'email' => 'required',
        $validatedData = $request->validate([
            'titulo' => 'required|unique:repositorios',
            'fecha' => 'required',
            'resumen' => 'required',
            'abstract' => 'required',
            'proyectimg' => 'required',
            'programa' => 'required',
            'tipoRepositorio' => 'required',
        
        
        ]);
        //obtenemos el campo file definido en el formulario
       $file = $request->file('proyectimg');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
      
         $registro  = new Proyecto;
        $registro->titulo  = $request->input('titulo');
        $registro->fecha  = $request->input('fecha');
        $registro->resumen  = $request->input('resumen');
        $registro->abstract  = $request->input('abstract');
        $registro->proyectimg  = $nombre;
        $registro->programa  = $request->input('programa');
        $registro->estado = '1';
        $registro->tipoRepositorio  = $request->input('tipoRepositorio');
        $registro->save();
        

       return redirect('/');
         
    }
     public function update(Request $request,$id)
    {
        // 'email' => 'required',
        $validatedData = $request->validate([
            'titulo' => 'required',
            'fecha' => 'required',
            'resumen' => 'required',
            'abstract' => 'required',
            'programa' => 'required',
            'tipoRepositorio' => 'required',
            'estado' => 'required',


        
        
        ]); 
          if ($request->file('proyectimg')) {
        $file = $request->file('proyectimg');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
     
            # code...
             //obtenemos el campo file definido en el formulario
       
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));

        $registro  = Proyecto::find($id);
        $registro->titulo  = $request->input('titulo');
        $registro->fecha  = $request->input('fecha');
        $registro->resumen  = $request->input('resumen');
        $registro->abstract  = $request->input('abstract');
        $registro->proyectimg  = $nombre;
        $registro->programa  = $request->input('programa');
        $registro->estado = $request->input('estado');;
        $registro->tipoRepositorio  = $request->input('tipoRepositorio');
        $registro->save();
          return redirect('/');
        }else{
          $registro  = Proyecto::find($id);
        $registro->titulo  = $request->input('titulo');
        $registro->fecha  = $request->input('fecha');
        $registro->resumen  = $request->input('resumen');
        $registro->abstract  = $request->input('abstract');
        $registro->programa  = $request->input('programa');
        $registro->estado = $request->input('estado');;
        $registro->tipoRepositorio  = $request->input('tipoRepositorio');
        $registro->save();
    
         return redirect('/');
        }
       

      
         
    }

    /**
     * Show the step 2 Form for creating a new proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store proyecto
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = $request->session()->get('proyecto');
        $proyecto->save();
        return redirect('/');
    }

    // public function edit(Request $request)
    // {
    //     $proyecto = Proyecto::find($id);
    //     return view('proyecto.edit',['project'=>$project]);

    // }

    public function edit($id)
    {
        $tipos=tipoRepositorio::all();
        $estados=estado::all();
        $proyecto=Proyecto::find($id);
        return view('contenido.edit',compact('proyecto','tipos','estados'));
    }

}
