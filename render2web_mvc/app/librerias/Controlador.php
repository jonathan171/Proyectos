<?php  

//clase controlador principal 
//se engarga de poder cargar los modelos y las vistas
class Controlador {
// cargar modelo 
	public function modelo ($modelo ){
  //cargar 
		require_once '../app/modelo/'.$modelo.'php';
		//instanciar el modelo 
		return new $modelo();

	}
	// cargar vista
	public function vista ($vista , $datos=[] ){
  //chequear si el archivo vista existe
		if(file_exists('../app/vistas/'.$vista.'php';)){
           require_once '../app/vistas/'.$vista.'php';
		} else {
            // si el archivo de la vista no existe 
              die('la vista nop existe');
		}
		
	}

}


?>