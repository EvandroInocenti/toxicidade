<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cpf', 'senha', 'nascimento', 'altura', 'peso', 'superficie_corporea', 'telefone', 'acesso'];
}
