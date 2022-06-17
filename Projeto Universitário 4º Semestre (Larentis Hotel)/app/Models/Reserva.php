<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';
    protected $fillable =
    [
        'pessoa_fisica_id',
        'check_in',
        'check_out',
        'adultos',
        'criancas'
    ];
    public function pessoaFisica() {
        return $this->belongsTo('App\Models\PessoaFisica');
    }

    public function aluga() {
        return $this->hasMany('App\Models\Aluga');
    }

    public function entradaSaida() {
        return $this->hasMany('App\Models\EntradaSaida');
    }

    public function consumo() {
        return $this->hasMany('App\Models\Consumo');
    }

}
