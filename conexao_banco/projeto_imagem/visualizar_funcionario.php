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

        //VERIFICA SE O id FOI PASSADO NA URL
        if (isset($_GET['id'])){
            $id = $_GET['id']; //OBTÉM O ID DO FUNCIONÁRIO ATRAVÉS DA URL

            //RECUPERA OS DADOS DO FUNCIONÁRIO NO BANCO DE DADOS
            $sql = "SELECT nome, telefone, tipo_foto, foto FROM funcionarios WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT); //VINCULA O VALOR DO id AO PARÂMETRO :id
            $stmt->execute(); //EXECUTA A INSTRUÇÃO SQL

            //VERIFICA SE ENCONTROU O FUNCIONÁRIO
            if ($stmt->rowCount()>0) {
                //A LINHA ABAIXO BUSCA OS DADOS DOS FUNCIONÁRIOS COM UM ARRAY ASSOCIATIVO
                $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

                //VERIFICA SE FOI SOLICITADO A EXCLUSÃO DO FUNCIONÁRIO
                //LINHA ABAIXO VERIFICA SE OS DADOS FORAM ENVIADOS COM O MÉTODO POST
                //isset VERIFICA SE HÁ UM VALOR DEFINIDO NA VARIÁVEL
                //VERIFICA SE O FORMULÁRIO FOI ENVIADO VIA POST E SE EXISTE O CAMPO "excluir_id"

                if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['excluir_id'])) {
                    //A LINHA ABAIXO PEGA O VALRO id QUE FOI ENVIADO PELO FORMULÁRIO COM O id CORRESPONDENTE
                    $excluir_id = $_POST['excluir_id'];

                    //MONTA A QUERY SQL PARA DELETAR O FUNCIONÁRIO COM O ID CORRESPONDENTE
                    $sql_excluir = "DELETE FROM funcionarios WHERE id = :id";

                    //PREPARA A QUERY PARA A EXECUÇÃO SEGURA EVITANDO SQL INJECTION
                    $stmt_excluir = $pdo->prepare($sql_excluir);

                    //ASSOCIA O VALOR id AO PARAMETRO :id NA QUERY, GARANTINDO QUE SERÁ TRATADO COMO UM NÚMERO
                    $stmt_excluir->bindParam(':id', $excluir_id, PDO::PARAM_INT);

                    //EXECUTA A QUERY EXCLUINDO O FUNCIONÁRIO DO BANCO DE DADOS
                    $stmt_excluir->execute();

                    header("Location: consulta_funcionario.php");
                    exit();
                }
                ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Funcionário</title>
</head>
<body>
    <h1>Dados do Funcionário</h1>
    <p>Nome: <?=htmlspecialchars($funcionario['nome'])?></p>

    <p>Telefone: <?=htmlspecialchars($funcionario['telefone'])?></p>

    <p>Foto: </p><img src="data: <?=$funcionario['tipo_foto']?>;base64,
    <?=base64_encode ($funcionario['foto'])?>" alt="Foto do Funcionário">
    <!-- FORMULÁRIO PARA EXCLUIR FUNCIONÁRIO -->
     <form method="POST">
            <input type="hidden" name="excluir_id" value="<?=$id ?>">
            <button type="submit">Excluir Funcionário</button>
    </form>
    <address><center>Rafaela Elisa Joaquim</address></center>
</body>
</html>
<?php
            } else {
                echo"Funcionário não encontrado";
            }
        } else {
            echo "ID do funcionário não foi fornecido";
        }
    } catch(PDOException $e) {
        echo "Erro: ". $e->getMessage();
    }

?>


