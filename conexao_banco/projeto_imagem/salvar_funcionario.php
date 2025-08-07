<?php

    //FUNÇÃO PARA REDIMENSIONAR A IMAGEM
    function redimensionarImagem($imagem,$largura,$altura){

        //OBTÉM AS DIMENSÕES ORIGINAIS DA IMAGEM
        //getimagesize() RETORNA A LARGURA E A ALTURA DE UMA IMAGEM
        list($larguraOriginal,$alturaOriginal) = getimagesize($imagem);
        
        //CRIA NOVA IMAGEM EM BRANCO COM NOVAS DIMENSÕES
        //imagecreatetruecolor() CRIA UMA NOVA IMAGEM EM BRANCO EM ALTA QUALIDADE
        $novaImagem = imagecreatetruecolor($largura,$altura);

        //CARREGA A IMAGEM ORIGINAL(JPEG) A PARTIR DO ARQUIVO 
        //imagecreatefromjpeg() CRIA UMA IMAGEM PHP A PARTIR DE UM JPEG
        $imagemOriginal = imagecreatefromjpeg($imagem);

        //COPIA E REDIMENSIONA A IMAGEM ORIGINAL PARA A NOVA
        //imagecopyresampled() COPIA COM REDIMENSIONAMENTO E SUAVIZAÇÃO
        imagecopyresampled($novaImagem,$imagemOriginal, 0, 0, 0, 0, 
        $largura,$altura,$larguraOriginal,$alturaOriginal);

        //INICIA UM BUFFER PARA GUARDAR A IMAGEM COM TEXTO BINÁRIO
        //ob_start() INICIA O "output buffering" GUARDADNDO A SAIDA
        ob_start();

        //imagejpeg() ENVIA A IMAGEM PARA O OUTPUT
        imagejpeg($novaImagem);

        //ob_get_clean PEGA O CONTEÚDO DO BUFFER E LIMPA
        $dadosImagem = ob_get_clean();

        //LIBERA A MEMÓRIA USADA PELAS IMAGENS
        //imagedestroy() LIMPA A MEMÓRIA DA IMAGEM CRIADA
        imagedestroy($novaImagem);
        imagedestroy($imagemOriginal);

        //RETORNA A IMAGEM REDIMENSIONADA EM FORMATO BINÁRIO
        return $dadosImagem;
    }

    //CONFIGURAÇÃO DO BANCO DE DADOS
    $host = 'localhost';
    $dbname = 'bd_imagens';
    $username = 'root';
    $password = '';

    try{
        //CONEXAO COM O BANCO DE DADOS USANDO PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // DEFINE QUE ERROS VÃO LANÇAR EXCEÇÕES

        //VERIFICA SE FOI UM POST E SE TEM ARQUIVO 'foto'
        if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_FILES['foto'])){

            if($_FILES['foto']['error']==0){
                // recebe os dados do formulário
                $nome = $_POST['nome']; //PEGA O NOME DO FUNC
                $telefone = $_POST['telefone']; //PEGA O TELEFONE DO FUNC
                $nomeFoto = $_FILES['foto']['name']; //PEGA O NOME ORIGINAL DO ARQUIVO
                $foto = $_FILES['foto']['type']; //PEGA O TIPO MIME(jpeg, etc) DA IMAGEM

                //REDIMENSIONA A IMAGEM
                $foto = redimensionarImagem($_FILES['foto']['tmp_name'], 300,400); //tmp_name É O CAMINHO TEMPORÁRIO

                //INSERE NO BANCO DE DADOS USANDO SQL PREPARADA
                $sql = "INSERT INTO funcionarios(nome, telefone, nome_foto, tipo_foto, foto)
                        VALUES(:nome, :telefone, :nome_foto, :tipo_foto, :foto)";

                $stmt = $pdo->prepare($sql); //PREPARA A QUERY PARA EVITAR ATAQUE SQL INJECTION
                $stmt->bindParam(':nome', $nome); //LIGA OS PARÂMETROS DAS VARIANTES
                $stmt->bindParam(':telefone', $telefone); //LIGA OS PARÂMETROS DAS VARIANTES
                $stmt->bindParam(':nome_foto', $nomeFoto); //LIGA OS PARÂMETROS DAS VARIANTES
                $stmt->bindParam(':tipo_foto', $tipoFoto); //LIGA OS PARÂMETROS DAS VARIANTES
                $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB); //LOB = Large Object USADO PARA DADOS BINÁRIOS COM IMAGENS

                if($stmt->execute()){
                    echo "Funcionário cadastrado com sucesso!";
                } else {
                    echo "Erro ao cadastrar funcionário";
                }
            } else {
                echo "Erro ao fazer upload da foto! Código: " . $_FILES['foto']['error'];
            }
        }
    }  catch (PDOException $e){
        //tratamento de exceções em caso de erro de conexão
        echo "Erro" . $e->getMessage(); //MOSTRA O ERRO SE HOUVER
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Imagens</title>
</head>
<body>
    <h1>Lista de Imagens</h1>
    <a href="consulta_funcionario.php">Listar Funcionários</a> 
    <address><center>Rafaela Elisa Joaquim</address></center>
</body>
</html>