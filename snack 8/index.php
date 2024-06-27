<?php 
    include_once __DIR__ . "/animali.php";
    $pesci = array_filter($animali, fn($a) => $a["classe"] == "pesce");
    $mammiferi = array_filter($animali, fn($a) => $a["classe"] == "mammifero");
    $rettili = array_filter($animali, fn($a) => $a["classe"] == "rettile");
    $altri = array_filter($animali, fn($a) => $a["classe"] == "altri");
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
        <h1>Pesci</h1>
        <ul>
            <?php foreach ($pesci as $key => $pesce) {?>
                <li><?php echo $pesce["nome"]?> - <?php echo $pesce["specie"] ?></li>
            <?php } ?>
        </ul>
        <h1>Mammiferi</h1>
        <ul>
            <?php foreach ($mammiferi as $key => $mammifero) {?>
                <li><?php echo $mammifero["nome"]?> - <?php echo $mammifero["specie"] ?></li>
            <?php } ?>
        </ul>
        <h1>Rettili</h1>
        <ul>
            <?php foreach ($rettili as $key => $rettile) {?>
                <li><?php echo $rettile["nome"]?> - <?php echo $rettile["specie"] ?></li>
            <?php } ?>
        </ul>
        <h1>Altri</h1>
        <ul>
            <?php foreach ($altri as $key => $altro) {?>
                <li><?php echo $altro["nome"]?> - <?php echo $altro["specie"] ?></li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>