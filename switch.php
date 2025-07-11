<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
<body>
    <?php
    $s = "lampada";

    switch ($s) {
        case "casa":
        print "A casa é amarela";
        break;

        case "arvore":
        print "A árvore é bonita";
        break;

        case "lampada":
        print "Joao apagou a lampada";
        break;

        default:
        print "Você não selecionou";
        break;

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