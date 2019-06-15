<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Profesores;
use App\Proyecto;
use App\tipoProfesor;
use App\ProyProf;

class ProfesorController extends Controller
{

public function registro(){


	return view('registrarProfesor');
}

public function add_Profesor( Request $request){
	

   $registro = new Profesores;

  $registro->nombre= $request->input('nombre');
  $registro->cedula= $request->input('cedula');
  $registro->save();

  return view('principal');

}
 public function relacion(){
 	$lista_proyectos=Proyecto::all();
 	$lista_profesores=Profesores::all();
 	$lista_tipos=tipoProfesor::all();

  
 	return view('relacionarProyecto',compact('lista_proyectos','lista_tipos','lista_profesores'));
 }
 public function add_Relacion( Request $request){
    $registro=new  ProyProf;
    $registro->profesor_id= $request->input('profesor');
    $registro->cod_proyecto=$request->input('proyecto');
    $registro->tipoDeProf_id=$request->input('rol');
    $registro->save();
    
     return view('principal');

 }


}