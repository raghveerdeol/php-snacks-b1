<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto 
che l’array non dovrà contenere lo stesso numero più
di una volta -->
<?php $numeri = [] ?>
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
            <?php 
            for ($i=0; count($numeri) < 15 ; $i++) { 
                array_push($numeri, rand(0,100));
            }
            ?>
            <?php foreach ($numeri as $numero) {?>
                <p>
                <?php echo $numero; ?> 
                </p>
            <?php } ?>
            
        </div>
    </main>
</body>
</html>