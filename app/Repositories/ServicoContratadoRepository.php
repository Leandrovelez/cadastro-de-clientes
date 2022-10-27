<?php 

namespace App\Repositories;

use App\Models\ServicosContratados;
 
class ServicoContratadoRepository {

    public function listar($clienteId){
        $servicos = new ServicosContratados;
        return $servicos->listar($clienteId);
    }

    public function criar($servico){
        $servicos = new ServicosContratados;
        return $servicos->criar($servico);
    }
    
    public function deletar($clienteId){
        $servicos = new ServicosContratados;
        return $servicos->deletar($clienteId);
    }
}
