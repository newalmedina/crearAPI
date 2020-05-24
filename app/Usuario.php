<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    //protected $table = "autores";

    protected $fillable = ["nombre", "apellidos"];
}
