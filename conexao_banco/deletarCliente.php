<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir cliente</title>
</head>
<body>
    <h2>Excluir Cliente</h2>
    <form action="processarDelecao.php" method="POST">
        <label for="id"> ID do cliente:</label>
        <input type="number" id="id" name="id" required>

        <button type="submit"> Excluir cliente</buutton>
    </form>
</body>
</html>