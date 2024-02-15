<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa bancário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $saque = $_POST['saque'] ?? 0;
            $notasde50 = intval($saque/50) ?? 0;
            $notasde20 = intval(($saque%50)/20) ?? 0;
            $notasde10 = intval(($saque-($notasde50*50)-($notasde20*20))/10) ?? 0;
            $notasde5 =  intval(($saque-($notasde50*50)-($notasde20*20)-($notasde10*10))/5) ?? 0;
            $notasde2 =  intval(($saque-($notasde50*50)-($notasde20*20)-($notasde10*10)-($notasde5*5))/2) ?? 0;
            $moedade1 =  intval(($saque-($notasde50*50)-($notasde20*20)-($notasde10*10)-($notasde5*5)-($notasde2*2))/1) ?? 0;


        ?>
        <h1>Saque bancário</h1>
        <form action="" method="post">
            <div class="content">
                <label for="saque">Insira o valor do saque abaixo:</label><br>
                <input type="number" name="saque" id="saque"><br>
                <input type="submit" value="Enviar">
                <p>O banco aceita notas de 50, 20, 10, 5, 2 e 1 Reais</p>
            </div>
        </form>
    </main>
    <div class="saq">
        <h1>Saque:</h1>
        <?php 
            echo <<<HTML
                <p>O saque no valor de <strong>R\$$saque</strong> será dividido em: </p>
                <p> <strong>$notasde50</strong> notas de <strong>R\$50</strong> </p>
                <p> <strong>$notasde20</strong> notas de <strong>R\$20</strong> </p>
                <p> <strong>$notasde10</strong> notas de <strong>R\$10</strong> </p>
                <p> <strong>$notasde5</strong> notas de <strong>R\$5</strong> </p>
                <p> <strong>$notasde2</strong> notas de <strong>R\$2</strong> </p>
                <p> <strong>$moedade1</strong> moeda de <strong>R\$1</strong> </p>
            HTML;
        ?>
    </div>
</body>
</html>