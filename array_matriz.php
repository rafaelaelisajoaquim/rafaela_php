<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo ARRAY multidimensional</title>
</head>
<body>
    <?php
    $musicas = array (
        array("Kid Abelha","Amanhã",1993),
        array("Ultrage A Rigor","Pelados",1985),
        array("Paralamas do Sucesso","Alagados",1987));
        for ($linha=0;$linha<3;$linha++)
        {
            for($coluna=0;$coluna<3;$coluna++)
            {
                echo $musicas[$linha][$coluna]." | ";
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