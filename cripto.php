<?php
    if(isset($_POST["enviar"]))
    {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        echo "Recibo de $usuario e senha $senha <br/><br/>";
        $cripto = MD5($senha);
        echo "Criptografada $cripto";
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