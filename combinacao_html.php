<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    <?php
    //Função usada para definir fuso horário padrão
    date_default_timezone_set('America/Los_Angeles');
    //Manipulando HTML e PHP
    $data_hoje = date ("d/m/Y", time());
    ?>

    <p align="center">Hoje é dia <?php echo $data_hoje ; ?>
    </p>

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