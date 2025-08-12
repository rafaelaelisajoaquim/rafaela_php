<?php
    //CONEXÃO COM O BANCO DE DADOS
    $host = 'localhost';
    $dbname = 'bd_imagens';
    $username = 'root';
    $password = '';

    try{
        //CONEXAO COM O BANCO DE DADOS USANDO PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // DEFINE QUE ERROS VÃO LANÇAR EXCEÇÕES

        //RECUPERA TODOS OS FUNCIONARIOS DO BANCO DE DADOS
        $sql = "SELECT id,nome FROM funcionarios";
        $stmt = $pdo->prepare($sql); // PREPARA A INSTRUÇÃO SQL PARA EXECUÇÃO
        $stmt->execute(); //EXECUTA A INSTRUÇÃO SQL
        $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC); //BUSCA TODOS OS RESULTADOS COMO UMA MATRIZ ASSOCIATIVA

        //VERIFICA SE FOI SOLICITADO A AXCLUSÃO DE UM FUNCIONÁRIO
        if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['excluir_id'])){
            $excluir_id = $_POST['excluir_id'];
            $sql_excluir = "DELETE FROM funcionarios WHERE id=:id";
            $stmt_excluir = $pdo->prepare($sql_excluir);
            $stmt_excluir->bindParam(':id',$excluir_id, PDO::PARAM_INT);
            $stmt_excluir->execute();

            //REDIRECIONA PARA EVITAR ENVIO DO FORM
            header("Location: ". $_SERVER['PHP_SELF']);
            exit();
        }
    } catch (PDOException $e) {
        echo "Erro: ". $e->getMessage(); //EXIBE A MENSAGEM DE ERRO SE A CONEXAO OU CONSULTA FALHAR
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Funcionário</title>
</head>
<body>
    <h1>Consulta Funcionário</h1>
    <ul>
        <?php foreach ($funcionarios as $funcionario): ?>
            <li>
                <!-- A LINHA ABAIXO EXIBE O LINK PARA VISUALIZAR OS DETALHES DO FUNCIONÁRIO COM BASE NO id-->
                <a href="visualizar_funcionario.php?id=<?=$funcionario['id']?>"> 
                <!-- A LINHA ABAIXO EXIBE O NOME DO FUNCIONÁRIO -->
                <?=htmlspecialchars($funcionario['nome'])?>
                </a>
                <!-- FORMULÁRIO PARA EXCLUIR FUNCIONÁRIOS-->
                 <form method="POST" style="display:inline;">
                    <input type="hidden" name="excluir_id" value="<?= $funcionario['id']?>">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <address><center>Rafaela Elisa Joaquim</address></center>
</body>
</html>