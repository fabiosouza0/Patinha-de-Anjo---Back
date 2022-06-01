<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{

    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'cep',
        'id_estado',
        'cidade',
        'logradouro',
        'bairro',
        'numero',
        'complemento',
        'petNome',
        'petSexo',
        'id_especie',
        'petRaca',
        'petPeso',
        'observacao'
    ];

    protected $casts = [
        'id_estado' => 'int',
        'numero' => 'int',
        'id_especie' => 'int',
        'petPeso' => 'float'
    ];
}
