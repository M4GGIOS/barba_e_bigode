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

        $descricao = $_POST["txtDescricao"];
        $localizacao = $_POST["txtLocalizacao"];
        $responsavel = $_POST["txtResponsavel"];

        $sql = "INSERT INTO filial(descricao, localizacao, responsavel) ";
        $sql .= "VALUES ('$descricao','$localizacao','$responsavel') ";

        
        if (executarComando($sql) == true)
        {
            echo '<h2>Filial registrada!</h2>';
        }
        
        else
        {
            echo '<h2>Erro ao cadastrar filial!</h2>';
        }

        ?>

         <a href="index.php"> 
            <button a="index.php" class="btn btn-info"> Voltar </button>
        </a>
    </body>
</html>
