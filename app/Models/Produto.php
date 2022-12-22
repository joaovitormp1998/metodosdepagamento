<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends RmModel
{
    protected $table = "produtos";
    protected $fillable = ['nome','valor','foto','descricao','categoria_id'];

}
