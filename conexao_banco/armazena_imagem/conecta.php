<?php 
        //Configuração de banco de dados
        $endereco ="localhost";// Endereço do servidor MySQLI.
        $usuario ="root";//Nome de usuário do banco de dados.
        $senha ="";//Senha do banco de dados.
        $banco="armazena_imagem";//Nome do banco de dados.

        //Criação de conexão
        $conexao = new mysqli($endereco,$usuario,$senha,$banco);
    
        #veririfca se houve erro de conexao
        if($conexao->connect_error) {
        die("Falha na conexão".$conexao->connect_error);
        }
?>