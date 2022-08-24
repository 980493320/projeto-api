<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class buscarcep extends Model
{
    protected $table = 'buscarcep';

    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',


    ];
}
