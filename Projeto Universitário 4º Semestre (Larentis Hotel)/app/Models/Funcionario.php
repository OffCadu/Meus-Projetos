<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $table = 'funcionarios';
    protected $fillable =
    [
        'pessoa_fisica_id',
        'clt',
        'salario',
        'grau_instrucao',
        'data_admissao',
    ];

    public function pessoaFisica() {
        return $this->belongsTo('App\Models\PessoaFisica', 'pessoa_fisica_id', 'id');
    }

    public function analisa() {
        return $this->hasMany('App\Models\Analisa');
    }
}
