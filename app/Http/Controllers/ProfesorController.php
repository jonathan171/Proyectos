<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\autor;
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

  return redirect('contenido.contenido');

}
 public function relacion(){
 	$lista_proyectos=Proyecto::all();
 	$lista_autores=autor::all();
 	

  
 	return view('relacionarProyecto',compact('lista_proyectos','lista_autores'));
 }
 public function add_Relacion( Request $request){
    $registro=new  ProyProf;
    $registro->idAutor= $request->input('autor');
    $registro->idRepositorio=$request->input('proyecto');
    $registro->save();
    
    return redirect('/');

 }


}