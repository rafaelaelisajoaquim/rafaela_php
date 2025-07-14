<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário completo com GET</title>
</head>
<body>
    <form method="GET" action="get_externo.php">
        <label>Nome:</label>
        <input type="text" name="nome"/>

        <label>Idade:</label>
        <input type="number" name="idade"/>

        <input type="submit" value="enviar"/>
</form>

<?php
    if(isset($_GET['nome']) && isset($_GET['idade'])){
        echo "Recebido o cliente ".$_GET['nome'];
        echo " que tem ".$_GET['idade']. " anos.";
    }
?>

<?php 
    echo 
        "<br/><center><address>Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas</address></center>";
?>
</body>
</html>