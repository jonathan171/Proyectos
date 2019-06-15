<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    protected $table = "profesores";
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
public function user(){

	return $this->belongsTo(User::class);

}

	//$r=App\RegistroUsuario::first()
protected $fillable = [
'cedula',
'nombre',
];
}