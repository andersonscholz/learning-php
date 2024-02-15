<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_POST['preco'] ?? 0;
        $porcentagem = $_POST['porc'] ?? 50;
        $reaj = $preco + (($preco*$porcentagem)/100);
        $reajuste = number_format($reaj, 2, ',', '')
    ?>
    <main>
        <h1>Reajuste de preços:</h1>
        <form action="" method="post">
            <label for="Valor do produto">Valor</label><br>
            <input type="float" name="preco" id=""><br>
            <div class="porc">
                <p>Reajuste de <strong id="porcentagem"></strong>%</p>
            </div>
            <input type="range" oninput="displayPorcentagem()" id="slider" name="porc" id="ajuste" min="0" max="100""><br>
            <input type="submit" value="Reajustar">
        </form>
        <?php echo"o valor final será de R\$$reajuste"?>
    </main>
</body>
<script>
    function displayPorcentagem(){
        var b = document.getElementById('porcentagem')
        var a = document.getElementById('slider').value
        b.textContent = a;
}
</script>
</html>