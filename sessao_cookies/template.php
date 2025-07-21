<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>
<body>
<h1> Gerenciador de Tarefas </h1>
    <form> 
        <fieldset>
            <legend> Nova Tarefa </legend>
    <label>
        Tarefa:
    <input type="text" name="nome" /><br>
    </label>

    <label><br>
        Descrição (opcional):<br>
    <textarea name="descricao"></textarea><br>
    </label>

    <label><br>
        Prazo (opcional):
    <input type="text" name="prazo" />
    </label><br><br>

    <fieldset>
        <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value:"baixa" checked />
                Baixa
                <input type="radio" name="prioridade" value:"media" checked />
                Média
                <input type="radio" name="prioridade" value:"alta" checked />
                Alta
            </label><br>
        </fieldset>
    <label><br>
        Tarefa concluída:
        <input type="checkbox" name="concluida" value="sim" />
    </label><br><br>
        <input type="submit" value="Cadastrar" />
    </fieldset>
    </form><br>

    <table> 
        <tr>
            <th>Tarefas </th>
            <th>Descrição</th>
            <th>Prazo </th>
            <th>Prioridade </th>
            <th>Concluída </th>
        </tr>

    <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr> 
            <td> <?php echo $tarefa['nome']; ?> </td>
            <td> <?php echo $tarefa['descricao']; ?> </td>
            <td> <?php echo $tarefa['prazo']; ?> </td>
            <td> <?php echo $tarefa['prioridade']; ?> </td>
            <td> <?php echo $tarefa['concluida']; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>