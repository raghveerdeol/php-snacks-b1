<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in 
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post
associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Dove c’è amore c’è vita.'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Non si vive se non il tempo che si ama. '
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Quando non si ama troppo, non si ama abbastanza'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Innamorati di te, della vita e dopo di chi vuoi.'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Se giudichi le persone, non hai il tempo di amarle. '
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Sono gli amici che puoi chiamare alle quattro del mattino, quelli che contano.'
            ]
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <div>
            <?php foreach ($posts as $key => $post) {?>
                <h1> <?php $key ?> </h1>
                <div class="card">
                    <?php foreach ($post as $card) { ?>
                    <p> <?php echo $card["title"]; ?> </p>
                    <p> <?php echo $card["author"]; ?> </p>
                    <p> <?php echo $card["text"]; ?> </p>
                <?php } ?>
                </div>
            <?php } ?> 
        </div>
    </main>
</body>
</html>