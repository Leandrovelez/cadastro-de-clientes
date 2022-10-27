<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicosContratados extends Model
{
    protected $fillable = [
        'cliente_id',
        'servico_id'
    ];

    protected $table = 'servicos_contratados';

    public function listar($clienteId){
        return $this->select('servicos.servico', 'servicos.id')
        ->join('servicos', 'servicos.id', 'servicos_contratados.servico_id')
        ->where('cliente_id', $clienteId)
        ->get()
        ->pluck('servico', 'id');
    }

    public function criar($servicos){
        return $this->create($servicos);
    }

    public function deletar($clienteId){
        return $this->where('cliente_id', $clienteId)->delete();
    }
}
