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
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $conexao = conectarBanco();

    $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);

    if(!$id){
        die("Erro: ID inválido.");
    }

    $sql = "DELETE FROM cliente WHERE id_cliente = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        echo"Cliente excluído com sucesso!";
    } catch (PDOException $e){
        error_log("Erro ao excluir cliente: ". $e->getMessage());
        echo "Erro ao excluir cliente.";
    }
}
?>


