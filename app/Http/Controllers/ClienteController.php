<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClienteRepository;
use App\Repositories\ServicosRepository;
use App\Repositories\ServicoContratadoRepository;

class ClienteController extends Controller
{
    private $clienteRepository;
    private $servicosRepository;
    private $servicoContratadoRepository;

    public function __construct(ClienteRepository $clienteRepository, ServicoContratadoRepository $servicoContratadoRepository, ServicosRepository $servicosRepository){
        $this->clienteRepository = $clienteRepository;
        $this->servicosRepository = $servicosRepository;
        $this->servicoContratadoRepository = $servicoContratadoRepository;
    }

    public function listar(){
        $clientes = $this->clienteRepository->listar();
        foreach($clientes as $cliente){
            $servicos[$cliente->id] = $this->servicoContratadoRepository->listar($cliente->id);
        }
        
        return view('listar', compact('clientes', 'servicos'));
    }

    public function criar(){
        $servicos = $this->servicosRepository->listar();
        return view('create', compact('servicos'));
    }

    public function Salvar(Request $request){
        $dados['nome'] = $request['nome'];
        $dados['email'] = $request['email'];
        $dados['telefone'] = $request['telefone'];
        $dados['empresa'] = $request['empresa'];
        $dados['servicos'] = $request['servicos'];
        $save = $this->clienteRepository->criar($dados);
        
        if($save){
            $cliente_id = $save->id;
            
            foreach($dados['servicos'] as $servico){
                $dado['cliente_id'] = $cliente_id;
                $dado['servico_id'] = $servico;
                $servicos = $this->servicoContratadoRepository->criar($dado);
            }
            return view('feedback');
        }
        
    }

    public function visualizar($clienteId){
        $cliente = $this->clienteRepository->selecionarClientePorId($clienteId);
        $servicos = $this->servicoContratadoRepository->listar($clienteId);
        return view('visualizar', compact('cliente', 'servicos'));
    }

    public function editar($clienteId){
        $cliente = $this->clienteRepository->selecionarClientePorId($clienteId);
        $servicos = $this->servicosRepository->listar();
        $servicosContratados = $this->servicoContratadoRepository->listar($clienteId);
        
        return view('editar', compact('cliente', 'servicosContratados', 'servicos'));
    }

    public function atualizar(Request $request){
        $cliente_id = $request['id'];
        $dados['nome'] = $request['nome'];
        $dados['email'] = $request['email'];
        $dados['telefone'] = $request['telefone'];
        $dados['empresa'] = $request['empresa'];
        $dados['servicos'] = $request['servicos'];
        $save = $this->clienteRepository->atualizar($cliente_id, $dados);
        
        if($save){
            $deleteServicos = $this->servicoContratadoRepository->deletar($cliente_id);

            foreach($dados['servicos'] as $servico){
                $dado['cliente_id'] = $cliente_id;
                $dado['servico_id'] = $servico;
                $servicos = $this->servicoContratadoRepository->criar($dado);
            }
            return view('feedback');
        }
    }

    public function deletar($clienteId){
        $deletar = $this->clienteRepository->deletar($clienteId);
        return redirect()->route('clientes.listar');
    }
}
