<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [
        [
            "casa" => "latina",
            "ospiti" => "pomezia",
            "punti_casa" => rand(0,50),
            "punti_ospiti" => rand(0,50),
        ],
        [
            "casa" => "roma",
            "ospiti" => "terracina",
            "punti_casa" => rand(0,50),
            "punti_ospiti" => rand(0,50),
        ],
        [
            "casa" => "lazio",
            "ospiti" => "parma",
            "punti_casa" => rand(0,50),
            "punti_ospiti" => rand(0,50),
        ],
        [
            "casa" => "verona",
            "ospiti" => "venezia",
            "punti_casa" => rand(0,50),
            "punti_ospiti" => rand(0,50),
        ],
        [
            "casa" => "brescia",
            "ospiti" => "bergamo",
            "punti_casa" => rand(0,50),
            "punti_ospiti" => rand(0,50),
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <?php foreach ($partite as $partita) { ?>
            <p>
                <?php
                echo $partita['casa'];
                ?> - 
                <?php
                echo $partita['ospiti']
                ?> | 
                <?php
                echo $partita['punti_casa']
                ?>-
                <?php
                echo $partita['punti_ospiti']
                ?>
            </p>
                <?php } ?>
            
        </div>
    </main>
</body>
</html>