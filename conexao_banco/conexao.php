<?php
    //habilita relatório detalhado de error no MySQL
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    /* função para conectar ao banco de dados
    retorna um objeto de conexao MySQLi ou interrompe o script em caso de erro */
    function conectadc(){
        //configuração do banco de dados
        $endereco = "localhost"; #endereço do servidr MySQL
        $usuario = "root"; #nome de usuário do banco de dados
        $senha = ""; #senha do banco
        $banco = "empresa"; #nome do banco de dados
        try{
        //criação de conexao
            $con = new mysqli ($endereco, $usuario, $senha, $banco);
        //definição do conjunto de caracteres para evitar problemas de acentuação
            $con->set_charset("utf8mb4"); //retorna objeto de conexao
            return $con
        } catch(Exception $e) {
         //exibe uma mensagem de erro e sencerra o script
            die("erro na conecão:". $e->getMenssage());
        }
    }
?>