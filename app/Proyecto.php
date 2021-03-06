<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
 


 protected $table = "repositorios";
 protected $fillable = ['fecha','titulo','resumen','abstract','proyectimg','programa','estado','tipoRepositorio'];
    //Query Scope

public function scopeAutor($query, $autor){
    if ($autor)
    return $query->where('autor', 'LIKE', "%$autor%");
}

public function scopeTitulo($query, $titulo){
    if ($titulo)
    return $query->where('titulo', 'LIKE', "%$titulo%");
}

public function scopeFecha($query, $fecha){
    if ($fecha)
    return $query->where('fecha', '=', "$fecha");
}

}


