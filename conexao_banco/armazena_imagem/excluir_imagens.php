<?php
require("conecta.php");

//OBTEM O id DA IMAGEM DA URL, GARANTINDO QUE SEJA UM NUMERO INTEIRO
    $id_imagem = isset($_GET['id'])? intval($_GET['id']):0;

//VERIFICA SE O id É VALIDO (MAIOR QUE ZERO)
    if($id_imagem>0){
    //CRIA A QUERY SEGURA USANDO PREPARED STATMENT 
        $queryExclusao = "DELETE FROM tabela_imagens WHERE codigo= ?";

//PREPARA O QUERY
    $stmt = $conexao-> prepare($queryExclusao);
//DEIFNE O ID COM UM INTEIRO
    $stmt-> bind_param("i", $id_imagem);

//EXECUTA A EXCLUSÃO
    if($stmt-> execute()){
    echo "Imagem excluida com sucesso!";
}
else{
    die ("Erro ao excluir a imagem: ".$stmt-> error);
}

//FECHA A CONSULTA
    $stmt-> close();

}else{
    echo "Id inválido";
}

//REDIRECIONA PARA A INDEX.PHP E GARENTE QUE O SCIRPT PARE
header("location: index.php");
exit();
?>