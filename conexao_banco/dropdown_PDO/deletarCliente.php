<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir cliente</title>
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
            max-width: 360px;
            width: 100%;
            margin-left: 500px;
            margin-top: 150px;
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
        </li>
      </ul>   

    <div class="container">
        <h2>Excluir Cliente</h2><br>

        <form action="processarDelecao.php" method="POST">

        <div class="mb-3">
            <label for="id" class="form-label">ID do cliente:</label><br>
            <input type="number" class="form-control" id="id" name="id" placeholder="Digite o ID" required>
        </div>


        <div class="col-12"><center>
            <button type="submit" class="btn btn-primary">Excluir cliente</button>
        </center></div>

        </form>
    </div>

</body>
</html>

<?php 
    echo "<center><address>Rafaela Elisa Joaquim | Desenvolvimento de sistemas</address></center>";
?>