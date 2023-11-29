<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './conexao_bd.php';

        $nome = $_POST["txtNome"];
        $servico = $_POST["txtServico"];
        $filial = $_POST["txtFilial"];
        $data = $_POST["txtData"];
        $horarioPreferencial = $_POST["txtHorario"];

        $sql = "INSERT INTO atendimento(nome, dataAtendimento, horarioPreferencial) ";
        $sql .= "VALUES ('$nome','$data','$horarioPreferencial') ";

        
        if (executarComando($sql) == true)
        {
            echo '<h2>Atendimento marcado!</h2>';
        }
        
        else
        {
            echo '<h2>Erro ao marcar atendimento! </h2>';
        }
        ?>

        <a href="index.php"> 
            <button a="index.php" class="btn btn-info"> Voltar </button>
        </a>
    </body>
</html>
