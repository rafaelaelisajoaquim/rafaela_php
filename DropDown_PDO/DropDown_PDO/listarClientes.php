<?php 
    require 'conexao.php';

    $conexao = conectarBanco();
    $stmt = $conexao ->prepare("SELECT * FROM cliente");
    $stmt ->execute();
    $clientes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(159, 224, 248);
        }

        .container {
            background: rgba(255,255,255,0.95);
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
            padding: 40px 32px 32px 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 320px;
            max-width: 800px;
            width: 100%;
            margin-left: 280px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="index.html"> Início </a></li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn"> Clientes </a>
          <div class="dropdown-content">
            <a href="inserirClientes.php"> Cadastro de Clientes </a>
            <a href="atualizarCliente.php"> Editar Clientes </a>
            <a href="deletarCliente.php"> Deletar Clientes </a>
            <a href="pesquisarCliente.php"> Pesquisar Clientes </a>
            <a href="listarClientes.php"> Listar Clientes </a>
        </li>
      </ul>   
    <div class="container">
        <h2>Lista de Clientes</h2>
        <br>
        <table class="table" border="1">
            <tr class="table-dark">
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>

            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?=htmlspecialchars($cliente["id_cliente"])?></td>
                    <td><?=htmlspecialchars($cliente["nome"])?></td>
                    <td><?=htmlspecialchars($cliente["endereco"])?></td>
                    <td><?=htmlspecialchars($cliente["telefone"])?></td>
                    <td><?=htmlspecialchars($cliente["email"])?></td>
                </tr>
                <?PHP endforeach;?>
        </table>
    </div>
</body>
</html>