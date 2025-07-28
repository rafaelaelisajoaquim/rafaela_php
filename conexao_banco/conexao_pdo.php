<?php
    function conectarBanco(){
        $dsn = "mysql:host=localhost;dbname=empresa;charset=utf8";
        $usuario = "root";
        $senha = "";

        try{
            $conexao = new PDO($dsn, $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            return $conexao;
        } catch (PDOException $e){
            error_log("Erro ao conectar no banco:". $e->getMessage());
            // Log sem expor erro ao usuário
            die("Erro ao conectar ao banco");
        }
    }
?>