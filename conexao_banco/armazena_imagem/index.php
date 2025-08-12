<?php
//INCLUI O ARQUIVO DE CONEXÇAO COMO BANCO DE DADOS
require_once ('conecta.php');

//CRIA A CONSULTA SQL PARA SELECIONAR OS DADOS PRINCIPAIS (SEM A COLUNA 'IMAGEM)
$querySelecao = "SELECT codigo, evento, descricao, nome_imagem, tamanho_imagem FROM tabela_imagens";

$resultado = mysqli_query($conexao, $querySelecao);

if(!$resultado){
    die ("Erro na consulta: ".mysqli_error($conexao));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armazenando imagens no Banco de Dados MySQL</title>
</head>
<body>
    <h2>Selecione um novo arquivo de imagem</h2>
    <form enctype= "multipart/form-data" action = "upload.php" method = "POST">
        <input type= "hidden" name= "MAX_FILE_SIZE" value = "999999999"/>
        <input type= "text" name= "evento" placeholder= "Nome do evento"/>
        <input type= "text" name= "descricao" placeholder= "Nome da descrição"/>
        <input type= "file" name= "imagem"/>
        <input type= "submit" value= "Salvar"/>
    </form>
    <br>

    <table >
        <tr>
            <td aling="center"> Código</td>
            <td aling="center"> Evento</td>
            <td aling="center"> Descrição</td>
            <td aling="center"> Nome da Imagem</td>
            <td aling="center"> Tamanho</td>
            <td aling="center"> Visualizar Imagens</td>
            <td aling="center"> Excluir Imagem</td>
        </tr>

    <?php
        while($arquivos= mysqli_fetch_assoc($resultado)){ ?>
        <tr>
            <td aling="center"> <?php echo $arquivos['codigo']; ?></td> 
            <td aling="center"> <?php echo $arquivos['evento']; ?></td>
            <td aling="center"> <?php echo $arquivos['descricao']; ?></td>
            <td aling="center"> <?php echo $arquivos['nome_imagem']; ?></td>
            <td aling="center"> <?php echo $arquivos['tamanho_imagem']; ?></td>
            <td aling="center"> 
                <a href="ver_imagens.php?id=<?php echo $arquivos['codigo'];?>"> Ver imagem </a href>
                
            <td aling="center"> 
                <a href="excluir_imagens.php?id=<?php echo $arquivos['codigo'];?>"> Excluir </a href>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>