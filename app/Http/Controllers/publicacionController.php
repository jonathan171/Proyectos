<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacion;
use App\Proyecto;
use App\User;



class publicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $Repositorios=Proyecto::all();
         $Usuarios=User::all();
         $Publicaciones=publicacion::orderBy('fechaPublicacion','DESC')->paginate(10);
        return view('Publicacion.index',compact('Publicaciones','Repositorios','Usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Repositorios=Proyecto::all();
         $Usuarios=User::all();

        return view('Publicacion.create',compact('Repositorios','Usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[ 'fechaPublicacion'=>'required', 'observacion'=>'required', 'idRepositorio'=>'required', 'idEstudiante'=>'required',]);
        publicacion::create($request->all());
        return redirect()->route('publicacion.index')->with('success','Registro creado satisfactoriamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $Publicaciones=publicacion::find($id);
        return  view('P.index',compact('Publicaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Repositorios=Proyecto::all();
         $Usuarios=User::all();
        $publicacion=publicacion::find($id);
        return view('Publicacion.edit',compact('publicacion','Usuarios','Repositorios'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $this->validate($request,[ 'fechaPublicacion'=>'required', 'observacion'=>'required', 'idRepositorio'=>'required', 'idEstudiante'=>'required',]);
        publicacion::find($id)->update($request->all());
        return redirect()->route('publicacion.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //
         publicacion::find($id)->delete();
        return redirect()->route('publicacion.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
