<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Sem segurança</h1>
    <form action="login_inseguro.php" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <button type="submit">Entrar</button>
    </form>

    <br><br><br>

    <h1>Com segurança</h1>
    <form action="login_seguro.php" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <button type="submit">Entrar</button>

    <br><br><br><center><address>Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas</address></center>
    </form>
</body>
</html>