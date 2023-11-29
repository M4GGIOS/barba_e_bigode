<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Serviços disponíveis</title>

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
        <?php include './conexao_bd.php' ?>

        <?php $sql = "SELECT nome, dataAtendimento, horarioPreferencial "; 
        $sql .= "FROM atendimento WHERE 1";
                            
        $resultado = retornarDados($sql);
        ?>

        <form name="formExibirAtendimento" action="" method="post">
            <div id="body">

                <h1><span>Atendimentos</span></h1>

                 <ol>

                    <li>
                        <table>
                    <tr>
                        <td>NOME</td>
                        <td>DATA</td>
                        <td>HORÁRIO</td>
                    </tr>
                    
                    <!-- A PARTIR DAQUI OS DADOS DA TABELA DEVEM VIR DO BANCO DE DADOS -->
                    <?php 
                    while ($linha = mysqli_fetch_assoc($resultado))
                    {
                    $nome = $linha["nome"];
                    $dataAtendimento = $linha["dataAtendimento"];
                    $horarioPreferencial = $linha["horarioPreferencial"];
                    ?>

                    <tr>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $dataAtendimento; ?></td>
                        <td><?php echo $horarioPreferencial; ?></td>
                    </tr>

                    <?php } ?>
                </table>
                    </li>
                    
                 </ol>
                
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
