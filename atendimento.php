<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimentos</title>
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
    
    <form name="formAtendimento" action="atendimento_registrar.php" method="post">
        <div id="body">

            <h1><span>AGENDE O ATENDIMENTO</span></h1>

            <ol>

                <li><input type="text" name="txtNome" placeholder="NOME COMPLETO" class="input"/></li>

                    <li class="li"> <label>Serviço</label> </li>
                    <li>
                        <select name="txtServico" class="input">                            
                            <option>Aparar barba</option>
                            <option>Aparar bigode</option>
                            <option>Fazer cavanhaque</option>
                            <option>Fazer bigode</option>
                            <option>Raspar</option>
                        </select>
                    </li>
                    
                    <li class="li"> <label>Filial</label></li>
                    <li class="li">
                        <select name="txtFilial" class="input">
                        <option>Belasis</option>
                        <option>Corleone</option>
                        <option>Estúdio Becca</option>
                        <option>Cavalera</option>
                        </select>
                    </li>

                    <li class="li"> <label>Data</label> </li>
                    <li><input type="date" name="txtData" placeholder="" class="input"></li>

                    <li class="li"> <label>Horário preferencial para atendimento</label></li>
                    <li class="li">
                        <select name="txtHorario" class="input">
                        <option>07:00 ÀS 09:00</option>
                        <option>09:00 ÀS 10:30</option>
                        <option>10:30 ÀS 12:00</option>
                        <option>13:00 ÀS 15:00</option>
                        <option>15:00 ÀS 16:30</option>
                        <option>16:30 ÀS 19:00</option>
                        </select>
                    </li>

                <li><input type="submit" value="Enviar" class="botao"/></li>

            </ol>
        </div>
    </form>

        <!-- Inclusao do rodapé da página -->
        <?php include 'rodape.php'; ?>
</body>
</html>