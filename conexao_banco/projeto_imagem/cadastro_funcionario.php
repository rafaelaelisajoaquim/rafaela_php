<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>Funcionário</h2>
        <!--FORMULÁRIO PARA CADASTRAR UM FUNCIONÁRIO-->
        <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">
            <!--CAMPO PARA INSERIR O NOME DO FUNCIONÁRIO-->
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br><br>

            <!--CAMPO PARA INSERIR O TELEFONE DO FUNCIONÁRIO-->
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" required><br><br>

             <!--CAMPO PARA FAZER UPLOAD DA FOTO DO FUNCIONÁRIO-->
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" required><br><br>

            <button type="submit">Cadastrar</button>
        </form>
<<<<<<< HEAD
=======

        <address><center>Rafaela Elisa Joaquim</address></center>
>>>>>>> 1c9eca1331caa14c27da9e49eda404badbdd8f54
    </div>
    
</body>
</html>