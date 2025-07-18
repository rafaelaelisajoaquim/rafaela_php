<?php
#file_ignore_new_lines ignorar o \n de cada linha
    $linhas = file ("texto.txt", FILE_IGNORE_NEW_LINES);
    var_dump($linhas);
    foreach ($linhas as $linha_num => $linhas){
        echo "Linha #{$linha_num} : ".$linha."<br>";
    }
?>