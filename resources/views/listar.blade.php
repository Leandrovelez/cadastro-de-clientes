<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8d70dac4bc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Listar</title>
</head>
<body>
    <div class="container justify-content-center">
        <h1>Lista de clientes</h1>
        <table class="table table-dark table-hover">
            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Empresa</th>
                <th>Serviços contratados</th>
                <th>Ações</th>
            </thead>
            <tbody class="table-group-divider">
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->telefone}}</td>
                    <td>{{$cliente->empresa}}</td>
                    <td>
                        <div class="d-flex flex-row">
                        @foreach($servicos[$cliente->id] as $servico)
                        <small class="m-1 d-inline-flex mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">
                            {{$servico}}
                        </small>
                        @endforeach
                        </div>
                    </td>
                    <td>
                        <a href="{{route('clientes.visualizar', $cliente->id)}}">
                            <i class="fa-solid fa-eye" title="Ver cadastro"></i>
                        </a>
                        <a href="{{route('clientes.editar', $cliente->id)}}">
                            <i class="fa-solid fa-pen-to-square" title="Editar"></i>
                        </a>
                        <i class="fa-solid fa-trash text-primary" title="Excluir" data-bs-toggle="modal" data-bs-target="#confirmaExclusao" data-id="{{ $cliente->id }}"></i>  
                    </td>
                </tr>
                @endforeach
                 
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmaExclusao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmaExclusaoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmaExclusaoLabel">Confirmar exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja excluir o cliente?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="deleteForm" action="" method="">
                    @csrf
                        <input type="submit" value="Excluir" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        
        $('#confirmaExclusao').on('show.bs.modal', function (event) {
            
            var button = $(event.relatedTarget);
            var idCliente = button.data('id');
            var rota = "{{ route('clientes.deletar', 0) }}"
            
            rota = rota.replace('/0', '/'+idCliente)
            
            $('#deleteForm').attr("action", rota );
        })
        
    </script>
</body>
</html>