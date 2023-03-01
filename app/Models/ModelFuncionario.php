<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFuncionario extends Model
{
    use HasFactory;
    protected $table = 'funcionario';
    protected $fillable = ['nome', 'email', 'telefone', 'dtnasc', 'endereco', 'ec'];
}
