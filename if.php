<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
<body>
    <?php
    $nome = "Paula Fernandes";
    $nome = NULL; 

    if (isset($nome)) { #se o nome não estiver nulo imprime algo, isset verifica se está nulo
        print "Essa linha não será printada se $nome for NULL.";
    }
    ?>

<?php 
        echo 
            "<center>
                <address>
                 Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas
                </address>
            </center>";
    ?>
</body>
</html>