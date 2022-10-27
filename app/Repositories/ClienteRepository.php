<?php 

namespace App\Repositories;

use App\Models\Cliente;
 
class ClienteRepository {

    public function criar($cliente){
        $model = new Cliente;
        return $model->criar($cliente);
    }

    public function listar(){
        $model = new Cliente;
        return $model->listar();
    }

    public function atualizar($cliente_id, $dados){
        $model = new Cliente;
        return $model->atualizar($cliente_id, $dados);
    }

    public function selecionarClientePorId($clienteId){
        $model = new Cliente;
        return $model->selecionarClientePorId($clienteId);;
    }
    
    public function deletar($cliente_id){
        $model = new Cliente;
        return $model->deletar($cliente_id);
    }
}
