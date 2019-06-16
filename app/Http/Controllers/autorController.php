<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\autor;

class autorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autores=autor::orderBy('cedula','DESC')->paginate(10);
        return view('autores.index',compact('autores'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('autores.create');
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
         $this->validate($request,[ 'cedula'=>'required', 'nombre'=>'required', 'email'=>'required', 'fechanac'=>'required', 'genero'=>'required', 'celular'=>'required',]);
        autor::create($request->all());
        return redirect()->route('autor.index')->with('success','Registro creado satisfactoriamente');
    
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
         $autores=autor::find($id);
        return  view('autores.index',compact('autores'));
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
        $autores=autor::find($id);
        return view('autores.edit',compact('autores'));
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
          $this->validate($request,[ 'cedula'=>'required', 'nombre'=>'required', 'email'=>'required', 'fechanac'=>'required', 'genero'=>'required', 'celular'=>'required',]);
 
        autor::find($id)->update($request->all());
        return redirect()->route('autor.index')->with('success','Registro actualizado satisfactoriamente');
 
    
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
         autor::find($id)->delete();
        return redirect()->route('autor.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
