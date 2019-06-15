<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

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
        $proyectos = Proyecto::orderBy('ID','DESC')
        ->autor($autor)
        ->titulo($titulo)
        ->fecha($fecha)
        ->paginate(3);
        return view('contenido.contenido',compact('proyectos',$proyectos));
    }

    /**
     * Show the step 1 Form for creating a new proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $proyecto = $request->session()->get('proyecto');
        return view('contenido.create-step1',compact('proyecto', $proyecto));
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
            'titulo' => 'required|unique:proyectos',
            'autor' => 'required',
            'identificacion' => 'required|numeric',
            'fecha' => 'required',
            'resumen' => 'required',
            'abstract' => 'required',
        ]);

        if(empty($request->session()->get('proyecto'))){
            $proyecto = new Proyecto();
            $proyecto->fill($validatedData);
            $request->session()->put('proyecto', $proyecto);
        }else{
            $proyecto = $request->session()->get('proyecto');
            $proyecto->fill($validatedData);
            $request->session()->put('proyecto', $proyecto);
        }

        return redirect('/contenido/create-step2');

    }

    /**
     * Show the step 2 Form for creating a new proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $proyecto = $request->session()->get('proyecto');
        return view('contenido.create-step2',compact('proyecto', $proyecto));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $proyecto = $request->session()->get('proyecto');


        if(!isset($proyecto->proyectImg) && !isset($proyecto->palabrasclave) && !isset($proyecto->keywords)) {
            $request->validate([
                // 'proyectimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'palabrasclave' => 'required',
            ]);

            // $fileName = "proyectImage-" . time() . '.' . request()->proyectimg->getClientOriginalExtension();
            // $palabrasclave = $proyecto->palabrasclave;
            // $request->proyectimg->storeAs('proyectimg', $fileName);

            // $request->palabrasclave->storeAs('palabrasclave', $palabrasclave);

            $file = $request->file('proyectimg');
            $nombre = $file->getClientOriginalName();
            \Storage::disk('local')->put($nombre, \File::get($file));

            // $proyecto = $request->session()->get('proyecto');
            $proyecto->palabrasclave = $_POST["palabrasclave"];
            $proyecto->keywords = $_POST["keywords"];
            $proyecto->patrocinador = $_POST["patrocinador"];
            // $proyecto->proyectImg = $fileName;
            $proyecto->proyectImg = $nombre;
            $request->session()->put('proyecto', $proyecto);
        }
        return redirect('/contenido/create-step3');

    }

    /**
     * Show the Proyecto Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function removeImage(Request $request)
    {
        $proyecto = $request->session()->get('proyecto');
        $proyecto->proyectImg = null;
        return view('contenido.create-step2',compact('proyecto', $proyecto));
    }

    /**
     * Show the Proyecto Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $proyecto = $request->session()->get('proyecto');
        return view('contenido.create-step3',compact('proyecto',$proyecto));
    }

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
        $proyecto=Proyecto::find($id);
        return view('contenido.edit',compact('proyecto'));
    }

}
