<?php
    require_once "conexao.php";

    $conexao = conectarBanco();

    //Obtendo o ID via GET
    $id_cliente = $_GET['id'] ?? null;
    $cliente = null;
    $msgErro = "";

    function buscarClientePorId ($id_cliente, $conexao){
        $stmt = $conexao -> prepare("SELECT id_cliente, nome, endereco, telefone, email
                                     FROM cliente WHERE id_cliente = :id");
        $stmt -> bindParam(":id", $id_cliente, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetch();
    }

    if($id_cliente && is_numeric($id_cliente)){
        $cliente = buscarClientePorId($id_cliente, $conexao);
        if(!$cliente){
            $msgErro = "Erro: Cliente não encontrado";
        }
    } else{
        $msgErro = "Digite o ID do cliente para buscar os dados";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cliente</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script>
        function habilitarEdicao(campo){
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>

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
            max-width: 380px;
            width: 100%;
            margin-left: 480px;
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
        <h2>Atualizar Cliente</h2>

        <?php if($msgErro): ?>
        <p style="color:red;"> <?= htmlspecialchars($msgErro) ?> </p>

        <form action="atualizarCliente.php" method="GET">
            <div class="form-group">
                <label for="id" class="form-label">ID do cliente:</label>
                <input type="number" id="id" name="id" class="form-control" required />
            </div>
                <br>
                <center><button type="submit" class="btn btn-primary">Buscar</button></center>
        </form>
    </div>

      <?php else: ?>
        <form action="processarAtualizacao.php" method="POST">
            <input type="hidden" name="id_cliente" 
            value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

            <br>

            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control"
            value="<?= htmlspecialchars($cliente['nome']) ?>" 
            readonly onclick="habilitarEdicao('nome')">

            <br>

            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" id="endereco" name="endereco" class="form-control"
            value="<?= htmlspecialchars($cliente['endereco']) ?>" 
            readonly onclick="habilitarEdicao('endereco')">

            <br>

            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control"
            value="<?= htmlspecialchars($cliente['telefone']) ?>" 
            readonly onclick="habilitarEdicao('telefone')">

            <br>

            <label for="email" class="form-label">Email:</label>
            <input type="text" id="email" name="email" class="form-control"
            value="<?= htmlspecialchars($cliente['email']) ?>" 
            readonly onclick="habilitarEdicao('email')">

            <br>

            <center><button type="submit" class="btn btn-primary">Atualizar Cliente</button></center>
        </form>
      <?php endif; ?>
</body>
</html>