<?php 

class utente {
    private $nome;
    private $cognome;

    public function __construct($nome,$cognome){
        $this->nome=$nome;
        $this->cognome=$cognome;
    }

    public function getName(){
        $this->nome=$nome;
    }    
    
    public function getSurname(){
        $this->cognome=$cognome;
    }
}


?>