<?php
        $endereco = "localhost";  // Endereço do banco
        $usuario = "root";  // Nome do usuário do banco de dados
        $senha = "";  // Senha do banco de dados
        $bancoDados = "armazena_imagem";  // Nome do banco de dados
    
        // Criação da conexão
        $conexao = new mysqli($endereco, $usuario, $senha, $bancoDados);
        // Verifica se houve erro de conexao
       if($conexao -> connect_error){
        die ("Falha na conexão" .$conexao ->connect_error);
       }
?>