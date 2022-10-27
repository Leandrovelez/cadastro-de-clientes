<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'empresa',
    ];

    public function selecionarClientePorId($clienteId){
        return $this->find($clienteId);
    }

    public function listar(){
        return $this->all();
    }

    public function criar($cliente){
        return $this->create($cliente);
    }

    public function atualizar($cliente_id, $dados){
        return $this->where('id', $cliente_id)
        ->update([
            'nome' => $dados['nome'], 
            'email' => $dados['email'],
            'telefone' => $dados['telefone'],
            'empresa' => $dados['empresa']
        ]);
    }

    public function deletar($cliente_id){
        return $this->where('id', $cliente_id)->delete();
    }
}
