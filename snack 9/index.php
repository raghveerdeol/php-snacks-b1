<?php 
// Creiamo due classi, una per rappresentare un Utente ed una per l'utente
//  PremiumUser. Aggiungiamo una classe Membership da passare nel
//   costruttore della sottoclasse PremiumUser.
require_once __DIR__ . "/classi/utente.php";
require_once __DIR__ . "/classi/utentePremium.php";

$utenteA = new utente("luca","ravenna");
var_dump($utenteA);
?>