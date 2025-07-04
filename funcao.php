<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    <?php
    $name = "Stefanie Hatcher";
    $length = strlen($name);
    $cmp = strcmp($name,"Brian Le");
    $index = strpos($name,"e");
    $first = substr($name,9,5);
    $name = strtoupper($name);

    echo ("$name<br>");
    echo ("$length<br>");
    echo ("$cmp<br>");
    echo ("$index<br>");
    echo ("$first<br>");
    echo ("$name")
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