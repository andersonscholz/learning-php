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
            $number =$_POST['raizq'] ?? 0;
            $raizq = sqrt($number);
            $raizc = pow($number, 1/3);
        ?>
        <h1>Insira o valor:</h1>
        <form action="" method="post">
            <label for="raizq"></label>
            <input type="number" name="raizq" id="raizq">
            <input type="submit" value="calc">
        </form>
    </main>
    <div class="resultado">
        <?php 
            echo "<h1>A raiz quadrada de $number é $raizq</h1>";
            echo "<h1>A raiz cúbica de $number é $raizc</h1>";
        ?>
    </div>
</body>
</html>