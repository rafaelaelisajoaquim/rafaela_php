<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOREACH</title>
</head>
<body>
    <?php
    $cores = array("Amarelo","Vermelho","Verde","Azul");
    foreach($cores as $cor)
    {
        echo $cor."</br>";
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