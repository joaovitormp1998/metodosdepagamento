<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends RmModel
{
    protected $table = "enderecos";
    protected $fillable = ['logradouro','numero','cidade','estado','cep','complemento','usuario_id'];
}
