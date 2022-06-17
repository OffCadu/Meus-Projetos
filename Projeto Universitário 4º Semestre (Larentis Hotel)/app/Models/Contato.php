<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $table = 'contatos';
    protected $fillable =
    [
        'digite_mensagem',
        'nome',
        'email',
        'assunto'
    ];

    public function analisa(){
        return $this->hasOne('App\Models\Analisa');
    }
}
