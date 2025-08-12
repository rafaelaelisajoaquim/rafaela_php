<?php
    require_once 'conexao.php';

// Estabelece conexão
    $conexao = conectadb();

// Define a consulta SQL para buscar clientes
    $sql="SELECT id_cliente,nome,email FROM cliente";

// Executa a consulta no banco
    $result=$conexao->query($sql);

// Verifica se há resultados na consulta
    if ($result->num_rows>0) {
        // Exibe os resultados na tela
        while ($linha = $result->fetch_assoc()) {
            echo "ID: ".$linha["id_cliente"]." - Nome: ".$linha["nome"]." - E-mail: ".$linha["email"]."<br>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

// Fecha a conexão com o banco de dados
    $conexao->close();
?>