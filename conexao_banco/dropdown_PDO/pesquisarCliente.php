<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body{
            background-color: pink;
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
            margin-left: 300px;
            margin-top: 100px;
        }
    </style>
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
    </body>

<?php
    require_once 'conexao.php';

    $conexao = conectarBanco();
    $busca = $_GET['busca'] ?? '';

    if (!$busca){
        ?>

        <div class="container">
            <h2> Pesquisar Clientes </h2>

            <br>

        <form action="pesquisarCliente.php" method="GET">
            <div class="mb-3">
            <label for="busca" class="form-label">Digite o ID ou Nome: </label>
            <input type="text" id="busca" name="busca" class="form-control" required>
            <br>
            <center><button type="submit" class="btn btn-primary">Pesquisar</button></center>
        </form>
    </div>
        <?php
        exit;
    }

    //escolhe entre busca por ID ou Nome e faz a consulta diretamente no banco de dados
    if (is_numeric($busca)) {
        $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente where id_cliente = :id");
        $stmt->bindParam(":id", $busca, PDO::PARAM_INT);
    } else {
        $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome");
        $buscaNome = "%$busca%";
        $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
    }

    $stmt->execute();
    $clientes = $stmt->fetchAll();

    if (!$clientes){
        die("Erro: Nenhum cliente encontrado.");
    }
?>

<div class="container">
<table class="table" border="1">
    <tr class="table-dark">
        <th>ID</th>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Ação</th>
    </tr>
</div>

    <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= htmlspecialchars($cliente['id_cliente']) ?> </td>
            <td><?= htmlspecialchars($cliente['nome']) ?> </td>
            <td><?= htmlspecialchars($cliente['endereco']) ?> </td>
            <td><?= htmlspecialchars($cliente['telefone']) ?> </td>
            <td><?= htmlspecialchars($cliente['email']) ?> </td>
            <td>
                <a href="atualizarCliente.php?id=<?=$cliente['id_cliente']?>">Editar</a>
                </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>