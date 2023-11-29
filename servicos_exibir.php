<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>
        <?php include "conexao_bd.php"; ?>
        <!-- CORPO DA PÁGINA -->
        <?php $sql = "SELECT * FROM servico ORDER BY preco DESC"; 
        
        $resultado = retornarDados($sql);
        ?>

        <form name="formServico" action="" method="post">
            <div id="body">

                <h1><span>Serviços disponíveis</span></h1>

                 <ol>

                    <li>
                <table>
                    <tr>
                        <td>DESCRIÇÃO</td>
                        <td>PREÇO</td>
                    </tr>
                    
                    <!-- A PARTIR DAQUI OS DADOS DA TABELA DEVEM VIR DO BANCO DE DADOS -->
                    <?php 
                    while ($linha = mysqli_fetch_assoc($resultado))
                    {
                    $descricao = $linha["descricao"];
                    $preco = $linha["preco"];
                    ?>

                    <tr>
                        <td><?php echo $descricao; ?></td>
                        <td><?php echo $preco; ?></td>
                    </tr>

                    <?php } ?>
                    
                </table>
                    </li>
                    
                 </ol>
                
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
