<style>
        body{
            background-color: rgb(255, 210, 210);
            font-family: Arial, Helvetica, sans-serif;
        }
</style>

<?php 
    require 'conexao.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conexao = conectarBanco();

        $id = filter_var($_POST["id_cliente"], FILTER_SANITIZE_NUMBER_INT);
        $nome = htmlspecialchars(trim($_POST["nome"]));
        $endereco = htmlspecialchars(trim($_POST["endereco"]));
        $telefone = htmlspecialchars(trim($_POST["telefone"]));
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

        if (!$id || !$email) {
            die("Erro: ID inválido ou e-mail incorreto");
        }

        $sql = "UPDATE cliente SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email WHERE id_cliente = :id";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":endereco", $endereco);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":email", $email);

        try {
            $stmt->execute();
            echo "Cliente atualizado com sucesso!";
        } catch (PDOException $e) {
            error_log("Erro ao atualizar cliente: " . $e->getMessage());
            echo "Erro ao atualizar registro.";   
        }
    }
?>
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
        </li>
      </ul>   
</body>
</html>