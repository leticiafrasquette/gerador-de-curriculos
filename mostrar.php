<!DOCTYPE html>

<?php

require_once 'classe/Curriculo.php';
$informacoes = Curriculo::gerador();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        
        <div><h1 class="alinhar">Contato</h1></div>
        <div><h2 class="alinhar"> <?= $informacoes['nome']; ?></h2></div>
        <div><h2 class="alinhar"> <?= $informacoes['nacionalidade']; ?></h2></div>
        <div><h3 class="alinhar"><?= $informacoes['endereco']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['email']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['idade']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['telefone']; ?></h3></div>
        <div><h3 class="alinhar"><?= $informacoes['objetivo']; ?></h3></div>
            
        
        <?php if($informacoes['formacoes']) { ?>
                <h2>Formação</h2>

                <ul>
                    <?php for($i = 0; $i < sizeof($informacoes['formacoes']['curso']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?=$informacoes['formacoes']['curso'][$i] ?></h4>
                                <p><?= $informacoes['formacoes']['instituicao'][$i] ?></p>
                                <p><?= $informacoes['formacoes']['conclusao'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
        <?php } ?>
        
        <?php if($informacoes['experiencias']) { ?>
                <h2>Experiência</h2>

                <ul >
                    <?php for($i = 0; $i < sizeof($informacoes['experiencias']['empresa']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $informacoes['experiencias']['empresa'][$i] ?></h4>
                                <p><?= $informacoes['experiencias']['funcao'][$i] ?></p>
                                <p><?= $informacoes['experiencias']['inicio'][$i] ?></p> 
                                <p><?= $informacoes['experiencias']['fim'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            
            <?php
            
            $a = json_encode($informacoes);
            
            file_put_contents("dados.txt", $a."\n", FILE_APPEND);
            
            ?>
    
    <script>
        window.print();
    </script>
        
    </body>
</html>