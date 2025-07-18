<?php
    $texto = file_get_contents("texto.txt");
    echo nl2br($texto). "<hr/>";
    $texto = $texto. " extra";
    echo nl2br($texto). "<hr/>";
    file_get_contents("texto.txt", $texto)
?>

<?php 
    echo 
        "<center>
            <address>
                Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas
            </address>
        </center>";
?>