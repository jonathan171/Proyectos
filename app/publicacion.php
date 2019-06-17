<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    //
    protected $table = "publicacion";
    protected $fillable = ['fechaPublicacion','observacion','idRepositorio','idEstudiante'];
}
