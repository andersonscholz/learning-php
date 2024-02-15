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
        $segs = $_POST['segs'] ?? 0;
        $segsMes = intval($segs/2592000);
        $segsSemana = intval(($segs - ($segsMes*2592000))/604800);
        $segsDia = intval(($segs-(($segsMes*2592000)+($segsSemana*604800)))/86400);
        $segsHora = intval(($segs-(($segsMes*2592000)+($segsSemana*604800)+($segsDia*86400)))/3600);
        $segsMinuto = intval(($segs-(($segsMes*2592000)+($segsSemana*604800)+($segsDia*86400)+($segsHora*3600)))/60);
        $segsSegundo = $segs-(($segsMes*2592000)+($segsSemana*604800)+($segsDia*86400)+($segsHora*3600)+($segsMinuto*60))


    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="post">
            <label for="segs">Qual  o total de segundos?</label><br>
            <input type="number" name="segs" id="segs"><br>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <div class="resultado">
        <h1>Totalizando:</h1>
        <?php 
            $tempo = array(
                'mes' => $segsMes,
                'semana' => $segsSemana,
                'dia' => $segsDia,
                'hora' => $segsHora,
                'minuto' => $segsMinuto,
                'segundo' => $segsSegundo,
            );
            foreach($tempo as $unidade => $valor){
                if ($valor>0){
                    echo "<p><strong>$valor</strong>$unidade";
                    if($unidade=='mes' && $valor>1){
                        echo "es";
                    }
                    else if($valor>1){
                        echo "s";
                    }
                }
                echo "</p>";
            }
        ?>
    </div>
</body>
</html>