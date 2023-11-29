<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
        <!----------------------------------------------------------->
    </head>
    <body>
        <?php
        include './conexao_bd.php';
        
        $descricao = $_POST["txtDescricao"];
        $preco = $_POST["txtPreco"];
        
        $sql = "INSERT INTO servico(descricao, preco) ";
        $sql .= "VALUES ('$descricao','$preco') ";
        
        if (executarComando($sql) == true)
        {
            echo '<h2 class="alert alert-success">Serviço cadastrado com sucesso!</h2>';
        }
        else 
        {
            echo '<h2 class="alert-danger">Erro ao cadastrar serviço!</h2>';
        }
        ?>

        <a href="index.php"> 
            <button a="index.php" class="btn btn-info"> Voltar </button>
        </a>
    </body>
</html>
