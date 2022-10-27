<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'servico',
    ];

    public function listar(){
        return $this->all();
    }
}
