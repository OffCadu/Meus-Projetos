<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class PessoaFisica extends Model
{
    use HasFactory;
    protected $table = 'pessoa_fisicas';
    protected $fillable =
    [
        'user_id',
        'cpf',
        'identidade',
        'uf',
        'data_nascimento',
        'telefone'
    ];

    public function user() {
        return $this->belongsTo('App\Models\Users', 'user_id', 'id');
    }

    public function reserva() {
        return $this->hasMany('App\Models\Reserva');
    }

    public function funcionario() {
        return $this->hasOne('App\Models\Funcionario', 'user_id', 'id');
    }

    public function endereco() {
        return $this->hasOne('App\Models\Endereco');
    }
}
