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
        $sal = $_POST['sal'] ?? 0;
        $salmin = 1412;
        $resto = $sal%$salmin;
        $quantidadeDeSal = intval($sal/$salmin);

        

    ?>
  
    <main>
        <h1>Cálculo de salários mínimos</h1>
        <form action="" method="post">
            <label for="sal">Salário:</label><br>
            <input type="float" name="sal" id="sal" value="<?=$sal?>"><br>
            <p>Considerando o salário minimo de <strong>R$1.412,00</strong></p>
            <input type="submit" class="abe" value="calcular">
        </form>
    </main>
    <section>
        <h2>Salário:</h2>

        <?php
            echo "<p>O salário de <strong>$sal</strong> reais é equivalente a <strong>$quantidadeDeSal</strong> salários mínimos <br>
            mais o restante de <strong>$resto</strong></p>";
        ?>

    </section>
</body>
</html>