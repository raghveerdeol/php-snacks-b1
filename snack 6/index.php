<!-- Snack 6
Utilizzare questo array:
https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo 
grigio e i PM in un rettangolo verde. -->
<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
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
            <div class="<?php if ($db['teachers']) {  echo 'grey';} ?>">
                <?php foreach ($db['teachers'] as $key => $teacher) {?>
                    <?php foreach ($teacher as $key => $value) { ?> 
                        <p>
                            <?php echo $value; ?>
                        </p>
                    <?php } ?>
                <?php } ?> 
            </div>
            <div class="<?php if ($db['pm']) {  echo 'green';} ?>">
            <?php foreach ($db['pm'] as $key => $single_pm) {?>
                    <?php foreach ($single_pm as $key => $value) { ?> 
                        <p>
                            <?php echo $value; ?>
                        </p>
                    <?php } ?>
                <?php } ?> 
            </div>
    </main>
</body>
</html>