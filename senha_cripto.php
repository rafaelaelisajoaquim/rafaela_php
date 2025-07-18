<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo post</title>
    <style type="text/css">
        label{
            display: inline-block;
            width:100px;
        }
    </style>
</head>

<body>
        <form method="POST" action="cripto.php">

        <label for="usuario"> Usuário: </label>
        <input type="text" name="usuario" required/><br/><br/>

        <label for="senha"> Senha: </label>
        <input type="password" name="senha" required/><br/><br/>

        <input type="submit" value="Enviar" name="enviar" />
        <input type="reset" name="Limpar"/>

    <center>
        <address>
            Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas
        </address>
    </center>
</body>
</html>