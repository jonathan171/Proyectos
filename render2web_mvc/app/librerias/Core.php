<?php

/* mapear la url ingresada en el navegador,
 1-controlador
 2 -metodo
 3 parametro
 */
 class Core {
 	protected $controladorActual ='paginas';
 	protected $metodoActual = 'index';
 	protected $parametros =[];
    
    //costructor
    public function __construct(){
  // print_r($this->getUrl());
    	$url= $this->getUrl();
    	//buscar en controladores si el controlador exixte
    	if (file_exists('../app/controladores/'.ucwords($url[0]).'.php')) {
    		//si existe se setea como controlador por defecto
    		$this->controladorActual=ucwords($url[0]);
    		//unset indice
    		unset($url[0]);
    	}
    	//requerir controlador 
    	require_once '../app/controladores/'.$this->controladorActual.'.php';
    	$this->controladorActual=new $this->controladorActual;
    	//chequear la segunda parte de la url que seria el metodo
      if (isset($url[1])) {
      		if(method_exists($this->controladorActual,$url[1])){
          //chequeamos el metodo 
    		$this->metodoActual=$url[1];
          unset($url[1]);
    	}
      }
          // echo $this->metodoActual;
      //obtener parametros 
      $this->parametros = $url ? array_values($url) : [];

     //llamar callback con parametros array
      call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
    }

 	public function getUrl(){

 	//echo $_GET['url'];
 		if (isset($_GET['url'])) {
 			$url=rtrim($_GET['url'],'/');
 			$url=filter_var($url,FILTER_SANITIZE_URL);
 			$url=explode('/', $url);
 			return $url;
 		}
 	}
 }