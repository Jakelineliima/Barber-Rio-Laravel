<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    protected $fillable = ['name','email','mensagem'];
}
