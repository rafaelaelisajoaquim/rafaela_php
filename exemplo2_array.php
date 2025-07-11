<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
    <?php
    $estados = array("PR","SC","RS","SP","RJ","MG","BA","RN","AM");
    echo "ORIGINAL: "; 
    print_r($estados);
    echo "<hr/>STRTOLOWE: Converte uma string para miníusculas<br/>";
    for ($i = 0; $i < count($estados); $i++) {
        $estados[$i] = strtolower($estados[$i]);
    }
    echo "STRTOLOWER: "; print_r($estados);
    echo "<hr/>SHIFT: Retira o primeiro elemento de um array<br/>";
    $rotaciona = array_shift($estados);
    echo "SHIFT: "; print_r($estados);
    echo "<hr/>POP Extrai um elemento do final do array<br/>";
    array_pop($estados);
    echo "<hr/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
    array_push($estados, "pr");
    echo "PUSH: "; print_r ($estados);
    echo "<hr/>REVERSE: Retorna um aray com os elementos na "
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