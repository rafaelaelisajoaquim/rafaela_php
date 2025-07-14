<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY dic</title>
</head>
<body>
<?php
    #rand - gera um inteiro aleatório
    $sorteio = rand(0,5);
    echo"Sorteado: $sorteio <hr/>";
    # array_merge - combina um ou mais arrays
    #range -cria um array contendo uma faixa de elementos
    #(inicio, fim, passo)  

    $vetor = array_merge(range(0,10),
    range($sorteio,10,2),
    array($sorteio));
    print_r($vetor); # print_r imprime o indice do array
    echo "<hr/>";

    #embaralha
    shuffle($vetor);
    print_r($vetor); 
    echo "<hr/>";
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