<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->
<?php 
$paragrafo = 'Quando dico “ti amo” che cosa sto dicendo di preciso? E soprattutto, chi parla? Il mio desiderio, la mia idealizzazione, la mia dipendenza, il mio eccesso, la mia follia? Non c’è parola più equivoca di “amore” e più intrecciata a tutte quelle altre parole che, per la logica, sono la sua negazione. Tutti, chi più chi meno, abbiamo fatto esperienza che l’amore si nutre di novità, mistero e pericolo e ha come suoi nemici il tempo, la quotidianità e la familiarità. Nasce dall’idealizzazione della persona amata di cui ci innamoriamo per un incantesimo della fantasia, ma poi il tempo, che gioca a favore della realtà, produce il disincanto e tramuta l’amore in un affetto privo di passione o nell’amarezza della disillusione. Qui Freud ci pone una domanda: “Quanta felicità barattiamo in cambio della sicurezza?”. Umberto Galimberti ci consegna un volume in cui l’acutezza del pensiero penetra i meandri del sentimento e del desiderio, registrando i mutamenti intervenuti nelle dinamiche dell’attrazione, nel patto con l’amato/a, nei percorsi del piacere (dall’onanismo alla perversione). Sullo sfondo si muove, come un fantasma, continuamente evocato e rimosso, quello che propriamente o impropriamente gli uomini non smettono di chiamare amore.'
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
        <?php 
        var_dump( explode( '.', $paragrafo ) );
        ?>
    </main>
</body>
</html>