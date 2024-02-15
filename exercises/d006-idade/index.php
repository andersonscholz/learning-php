<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
           $data = date("Y");
           $nasc = $_POST['idade'] ?? 0;
           $idade23 = $data-$nasc;
           $ano= 2000;
        ?>
        <h1>Insira os dados:</h1>
        <form action="" method="post">
            <label for="idade">Ano de nascimento:</label><br>
            <input type="number" name="idade" id="" value="<?=$ano?>"><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <div class="resultado">
        <?php
            if($idade23<0){
                echo "<p>Insira um ano válido</p>";
            }
            else if($idade23>110){
                echo "<p>Você provavelmente já terá falecido</p>";
            }
            else if($idade23==1){
                echo "<p>A sua idade em $data será <strong>$idade23</strong> ano</p>";
            }
            else{
                echo "<p>A sua idade em $data será <strong>$idade23</strong> anos</p>";
            }
        ?>
    </div>
</body>
</html>