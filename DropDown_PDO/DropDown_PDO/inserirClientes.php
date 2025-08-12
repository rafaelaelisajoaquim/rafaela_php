<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
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
            margin-top: 100px;
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
    <h2> Cadastro de Cliente </h2>
    <br>
    <form action = "processarInsercao.php" method = "POST" >
    <div class="form-group">
        <label for ="nome"> Nome: </label>
        <input type ="text" id ="nome" name ="nome" class="form-control" required>

        <label for ="endereco"> Endereço: </label>
        <input type ="text" id ="endereco" name ="endereco" class="form-control" required>

        <label for ="telefone"> Telefone: </label>
        <input type ="text" id ="telefone" name ="telefone" class="form-control" required>

        <label for ="nome"> Email: </label>
        <input type ="text" id ="email" name ="email" class="form-control" required>
        <br>
        <div>
            <button type ="submit" class="btn btn-primary"> Cadastrar Cliente </button>
        </div>
    </div>
    </form>
</div>
</body>
</html>