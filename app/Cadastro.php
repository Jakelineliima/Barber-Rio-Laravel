<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'name', 'surname', 'rg', 'cpf',
        'datanasc', 'phone', 'email', 'password'
    ];
}
