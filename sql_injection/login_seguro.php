<?php
    //configuração do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa_teste";

    //conexão usando MySqli sem  proteção contra SQL Injection
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    //verifica se há erro na conexão 
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    //captura dados do from (nome)
    $nome = $_POST["nome"];

    //prepara a consulta SQL segura
    $stmt = $conexao->prepare("SELECT * FROM cliente_teste WHERE nome = ?");
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    //se houver resultados, o login é considerado bem-sucedido
    if($result->num_rows > 0) {
        header("Location: area_restrita.php");
        //garante que o código pare aqui para evitar execuções indevidas
    exit();
    } else {
        echo"Nome não encontrado.";
        echo "<br><br><br><center><address>Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas</address></center>";
    }
    //fecha conexao
    $stmt->close();
    $conexao->close();
?>