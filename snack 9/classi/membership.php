<?php 

class membership extends Utente {
    private $membership;

    public function __construct($nome,$cognome,$membership,){
        parent::__construct($nome,$cognome);
        $this->membership=$membership;
    }
    
    public function getMembership(){
        $this->membership;
    }

    public function setMembership($membership){
        $this->membership=$membership;
    }
}

?>