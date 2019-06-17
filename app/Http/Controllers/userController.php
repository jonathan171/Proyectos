<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\rol;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
              $Roles=rol::all();
             $Usuarios=User::orderBy('id','DESC')->paginate(10);
        return view('usuarios.index',compact('Usuarios','Roles'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //;
        
         $Roles=rol::all();
        $usuario=User::find($id);
        return view('usuarios.edit',compact('usuario','Roles'));
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
         $this->validate($request,['name'=>'required', 'email'=>'required', 'estado'=>'required', 'rolID'=>'required',]);
            User::find($id)->update($request->all());
        return redirect()->route('usuario.index')->with('success','Registro creado satisfactoriamente');

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
         User::find($id)->delete();
        return redirect()->route('usuario.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
