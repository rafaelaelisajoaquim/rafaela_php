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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(159, 224, 248);
            padding: 30px;
        }

    </style>
</head>
<body>
        <div class="col-12"><center>
        <a href="deletarCliente.php">Voltar para a página anterior</a>
    </div><br><br>
</body>
</html>

<?php 
    echo "<center><address>
                    Rafaela Elisa Joaquim | Desenvolvimento de sistemas</address></center>";
?>
