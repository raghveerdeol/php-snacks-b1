<?php 

class utentePremium extends membership {
    
    private $level;

    public function __construct($nome,$cognome,$membership,$level,){
        parent::__construct($nome,$cognome,$membership,);
        $this->level=$level;
    }

}


?>