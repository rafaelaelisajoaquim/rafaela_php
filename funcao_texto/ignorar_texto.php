<?php
#file_ignore_new_lines ignorar o \n de cada linha
    $linhas = file ("texto.txt", file_ignore_new_lines);
    var_dump($linhas);
    foreach ($linhas as $linha_num => $linhas){
        echo "Linha #{$linha_num} : ".$linha."<br>";
    }
?>