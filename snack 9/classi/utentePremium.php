<?php 

class utentePremium extends membership {
    
    private $level;

    public function __construct($level,$membership,$nome,$cognome){
        parent::__construct($membership,$nome,$cognome);
        $this->level=$level;
    }

}


?>