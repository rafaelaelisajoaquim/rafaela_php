<?php session_start(); 
    if (isset($_GET['nome']) && $_GET['nome'] !='') {
        $tarefa = array ();

        $tarefa['nome'] = $_GET['nome'];
    }

    if(isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }

    if(isset($_GET['prazo'])) {
        $tarefa['prazo'] = $_GET['prazo'];
    } else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(isset($_GET['concluida'])) {
        $tarefa['concluida'] = $_GET['concluida'];
    } else {
        $tarefa['concluida'] = '';
    }

    $_SESSION['lista_tarefas'][] = $tarefa;

    if(array_key_exists('lista_tarefas', $_SESSION)){
        $lista_tarefas = $_SESSION['lista_tarefas']; 
    } else {
        $lista_tarefas = [];
    }

    include "template.php"
?>

<?php 
      echo "<center><address>Rafaela Elisa Joaquim / Estudante / Técnico em desenvolvimento de sistemas</address></center>";
?>