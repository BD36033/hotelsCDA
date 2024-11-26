<?php

class ReservationTable{ 
    private $ResNo = '';
    private $LastName = '';

    public function hydrater(array $row) {

        foreach ($row as $k => $v) {
            // Concaténation : nom de la méthode setter à appeler
            $setter = 'set' . ucfirst($k);
            // fonction prend 2 paramètres : l'objet en cours et le nom de la méthode
            if (method_exists($this, $setter)) {
                // Invoquer la méthode
                $this->$setter($v);
            }
        }
        
    }

    public function __construct($data = null) {

        if ($data != null) {

            $this->hydrater($data);
        }
    }

    public function getResNo(){
        return $this->ResNo;
    }
    public function setResNo($ResNo) {
        $this->ResNo = $ResNo;
    }
    public function getLastName(){
        return $this->LastName;
    }
    public function setLastName($LastName) {
        $this->LastName = $LastName;
    }
    
}