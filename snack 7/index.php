<!-- Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato,
da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php 
    include_once __DIR__ . "/students.php";
    var_dump($classe);
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
            <ul>
                <?php foreach ($classe as $key => $studente) {?>
                    <li>
                        <?php echo $studente["nome"] ?>
                        <?php echo $studente["cognome"] ?>
                    </li>
                    <li>
                        <?php foreach ($ as key => value) {?>
                        
                        <?php } ?>,
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
</body>
</html>