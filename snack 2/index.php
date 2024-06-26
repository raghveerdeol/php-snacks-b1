<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
 che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
 Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <main>
            <form action="./index.php" method="get">
                <input type="text" name="nome" id="nome">
                <input type="email" name="email" id="email">
                <input type="number" name="age" id="age">
                <input type="submit">
            </form>
            <p>
            <?php
                if ((strlen($_GET["nome"]) >= 3) && (str_contains($_GET["email"],"@"))) {
                    echo "Accesso riuscito";
                } else {
                    echo "Accesso negato";
                }
            ?>
            </p>
        </main>
    </body>
    </html>