<?php 

class membership extends Utente {
    private $membership;

    public function __construct($membership,$nome,$cognome){
        parent::__construct($nome,$cognome);
        $this->membership=$membership;
    }
    
    public function getMembership(){
        $this->membership=$membership;
    }

    public function setMembership($membership){
        $this->membership=$membership;
    }
}

?>