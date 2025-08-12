<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="estilo.css" media="all"/>
    <title>Document</title>
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
      <br>
</body>
</html>

<?php
    require_once "conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexao = conectarBanco();

        $sql = "INSERT INTO cliente (nome,endereco,telefone,email)
                VALUES(:nome,:endereco,:telefone,:email)";
        
        $stmt = $conexao -> prepare($sql);
        $stmt -> bindParam(":nome",$_POST["nome"]);
        $stmt -> bindParam(":endereco",$_POST["endereco"]);
        $stmt -> bindParam(":telefone",$_POST["telefone"]);
        $stmt -> bindParam(":email",$_POST["email"]);

        try{
            $stmt ->execute();
            echo "Cliente cadastrado com sucesso!";
        } catch(PDOException $e){
            error_log("Erro ao inserir cliente: " . $e -> getMessage());
            echo "Erro ao cadastrar cliente";
        }
    }
?>
