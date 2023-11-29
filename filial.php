<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filiais</title>
        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
        <!----------------------------------------------------------->
</head>
<body>
    <!-- Inclusão do cabeçalho/topo base do site -->
    <?php include 'cabecalho.php'; ?>

    <form name="formAtendimento" action="filial_registrar.php" method="post">
        <div id="body">

            <h1><span>CADASTRO DE FILIAL</span></h1>

            <ol>

                <li class="li"> <label>Descrição da Filial</label> </li>
                <li><input type="text" name="txtDescricao" placeholder="" class="input"></li>

                <li class="li"> <label>Localização</label> </li>
                <li><input type="text" name="txtLocalizacao" placeholder="" class="input"/></li>
                    
                <li class="li"> <label>Responsável</label> </li>
                <li><input type="text" name="txtResponsavel" placeholder="" class="input"></li>

                <li><input type="submit" value="Cadastrar" class="botao" />
                </li>

            </ol>
        </div>
    </form>

        <!-- Inclusao do rodapé da página -->
        <?php include 'rodape.php'; ?>
</body>
</html>