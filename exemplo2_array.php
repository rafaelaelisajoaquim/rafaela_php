<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
<?php
        $estados = array("PR", "SC", "RS", "SP", "RJ", "MG", "BA", "RN", "AM");

        echo "ORIGINAL: ";
        print_r($estados);
        echo "<hr/> STRLOWER: Converte uma string em um array para minúsculas. <br/><br/>";

        for ($i = 0; $i < count($estados); $i++) {
            $estados[$i] = strtolower($estados[$i]);
        }

        echo "STRLOWER: "; 
        print_r($estados);
        echo "<hr/> SHIFT: Retira o primeiro elemento de um array <br/><br/>";

        $rotaciona = array_shift($estados);
        $estados[] = $rotaciona;
        echo "SHIFT: "; 
        print_r($estados);

        echo "<hr/> POP: Extrai um elemento do final do array <br/><br/>";
        array_pop($estados);

        echo "POP: "; 
        print_r($estados);

        echo "<hr/> PUSH: Adiciona um ou mais elementos no final de um array <br/><br/>";
        array_push($estados, "GO");
        echo "PUSH: "; 
        print_r($estados);

        echo "REVERSE: Inverte a ordem dos elementos de um array <br/><br/>";
        $inverso = array_reverse($estados);
        echo "REVERSE: "; 
        print_r($inverso);

        echo "<hr/> SORT: Ordena os elementos de um array <br/><br/>";
        sort($estados);
        echo "SORT: "; 
        print_r($estados);

        echo "<hr/> SLICE: Extrai uma parte de um array <br/><br/>";
        $dividir = array_slice($estados, 1, 2);
        echo "SLICE: "; 
        print_r($dividir);
        echo "<br/>";
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