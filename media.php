<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
<body>
    <?php
        $nota = 4;

    $aprovado = ($nota >= 7);
    $recuperacao = ($nota < 7 & $nota >= 5);
    $reprovado = ($nota < 5);

    if ($aprovado) { 
        echo "O aluno(a) foi aprovado!";
        }

    else if ($recuperacao) { 
        echo "O aluno(a) está de recuperação!";
        }

    else { 
        echo "O aluno(a) está reprovado!";
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