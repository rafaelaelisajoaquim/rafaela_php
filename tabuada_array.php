<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABUADA ARRAY </title>
</head>
<body>
    <?php
    $tabuada = array ();

        for ($linha=0;$linha<1;$linha++)
        {
            for($coluna=0;$coluna<12;$coluna++)
            {
                echo $tabuada [$linha]  [$coluna];
            }
            echo "<br/>";
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