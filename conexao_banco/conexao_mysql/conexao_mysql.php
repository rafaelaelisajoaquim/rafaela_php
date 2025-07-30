<?php
//habilita relatario detalhado do erro Mysql
    mysqli_report(MYSQL_REPORT_ERROR| MYSQLI_REPORT_STRICT);

    /*
     funcao apra conectar do banco de dados
     retorna um objeto de conexao Mysqli ou interrompe o script em caso de erro 
    */

    function conectadb(){
    //configura o banco de dados 
        $endereco ="localhost"
        $usuario ="root"
        $senha =""
        $banco ="empresa"
    }

    try{
    //criação de conexão
        $con = new mysqli($endereco, $usuario, $senha, $banco);
    
    //definição de conjunto de caracteres parea evitar problemas de acentuação
        $con->set_charset("utf8mb4"); //retorna o objeto de conexão
        return $con;
    }
    catch(Exception $e){
    //exibe uma mensagem de erro e encerra o script
        die("Erro de conexão:". $e->getMenssage();)
    }
?>