<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'enderecos';
    protected $fillable =
    [
        'pessoa_fisica_id',
        'pessoa_juridica_id',
        'cep',
        'numero',
        'cidade',
        'rua',
        'estado',
        'complemento'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function pessoaJuridica(){
        return $this->belongsTo('App\Models\PessoaJuridica');
    }
}
