<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $num1 = $_POST['num1'] ?? 0;
            $num2 = $_POST['num2'] ?? 0;
            $val1 = $_POST['val1'] ?? 0;
            $val2 = $_POST['val2'] ?? 0;
            $respA = ($num1+$num2)/2;
            $respB = (($num1*$val1)+($num2*$val2))/($val1+$val2)
        ?>
        <h1>Insira os valores:</h1>
        <form action="" method="post">
            <label for="num1">Numero 1</label><br>
            <input type="number" name="num1" id=""><br>
            <label for="val1">Valor 1</label><br>
            <input type="number" name="val1" id=""><br>
            <label for="num2">Numero 2</label><br>
            <input type="number" name="num2" id=""><br>
            <label for="val2">Valor 2</label><br>
            <input type="number" name="val2" id=""><br>
            <input type="submit" value="calc">
        </form>
    </main>
    <div class="resultado">
        <?php 
            echo "<p>A média aritmética de $num1 e $num2 é <strong>$respA</strong></p>";
            echo "<p>A média ponderada de $num1 e $num2 é <strong>$respB</strong></p>";

        ?>
    </div>
</body>
</html>