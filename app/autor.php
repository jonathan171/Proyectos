<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    //
    protected $table = "autores";
    protected $fillable = ['cedula', 'nombre', 'email', 'fechanac', 'genero', 'celular'];

}
