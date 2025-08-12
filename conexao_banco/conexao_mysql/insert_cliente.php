<?php
// Inclui o arquivo de cconexão com o banco de dados
    require_once 'conexao.php';

// Estabelece a conexão com o banco de dados
    $conexao = conectadb();

// Definição dos valores para inserção
    $nome="Rafaela";
    $endereco = "Rua Calabresa, 32";
    $telefone = "(41) 5555-5555";
    $email = "rafaelaelisaj@teste.com";

// Prepara a consulta SQL para usando 'prepare()' para evitar SQL Injection
    $stmt=$conexao->prepare("INSERT INTO cliente(nome,endereco,telefone,email) VALUES (?,?,?,?)");

// Associa os parâmetros aos valores da consulta
    $stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

// Executa a inserção SQL
    if ($stmt->execute()) {
        echo "Cliente adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar o cliente: " . $stmt->error;
    };

    // Fecha a consulta e a conexão com o banco de dados
    $stmt->close();
    $conexao->close();
?>