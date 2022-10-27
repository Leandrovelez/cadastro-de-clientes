<?php 

namespace App\Repositories;

use App\Models\Servico;
 
class ServicosRepository {

    public function listar(){
        $servicos = new Servico;
        return $servicos->listar();
    }
}
