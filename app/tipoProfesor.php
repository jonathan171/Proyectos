<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoProfesor extends Model
{
    protected $table = "tipo_profesor";
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */


	//$r=App\RegistroUsuario::first()
protected $fillable = [
'tipo_profesor',

];


}
