<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
<body>
    <?php
    $idade = 16;
    print "Você tem".$idade." anos de idade.<br>";
    print "Você tem $idade anos de idade.<br>";
    print 'Você tem $idade anos de idade.<br>';

    print "Hoje é seu $idade º aniversário.<br>";
    print "Hoje é seu {$idade}th aniversário.<br>";
    ?>

    <?php
    $cidade = "Joinville";
    $estado = "Santa Catarina";
    $idade = 174;
    $frase_capital = "A cidade de $cidade é a capital do $estado";
    $frase_idade = "$cidade tem mais de $idade anos";
    echo "<h3>$frase_capital</h3>";
    echo "<h4>$frase_idade</h4>";
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