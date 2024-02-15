<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_POST['d1'] ?? 0;
        $divisor = $_POST['d2'] ?? 1;
        $resposta = $dividendo/$divisor;
        $resto = $dividendo%$divisor;
        $respostain = intval($resposta);
    ?>
  
    <main>
        <h1>Anatomia de divisão</h1>
        <form action="" method="post">
            <label for="d1">Dividendo</label><br>
            <input type="number" name="d1" id="d1" value="<?=$dividendo?>"><br>
            <label for="d2">Divisor</label><br>
            <input type="number" name="d2" id="d2" value="<?=$divisor?>"><br>
            <input type="submit" class="abe" value="calcular">

        </form>
    </main>
    <section>
        <h2>Estrutura:</h2>

        <?php
            echo <<<HTML
                <div class='l1'>
                    <div class='a1'>
                        <p>$dividendo</p>
                    </div>
                    <div class='a2'>
                        <p>$divisor</p>
                    </div>
                </div>
                <div class='l2'>
                    <div class='a3'>
                        <p>$resto</p>
                    </div>
                    <div class='a4'>
                        <p>$respostain</p>
                    </div>
                </div>
            HTML;
        ?>

    </section>
</body>
</html>