<?php

class HotelTable
{
    // 1 déclarer les propriétés (attributs)
    private $Hotel = "";
    private $Name = "";
    private $Stars = "";

    // 2 importer la méthode hydrater !
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

    // 3 puis le constructeur !
    public function __construct($data = null) {
        if ($data != null) {
            $this->hydrater($data);
        }
    }

    // 4 ALT + INSER pour générer setter et getter !
    /**
     * @return string
     */
    public function getHotel()
    {
        return $this->Hotel;
    }

    /**
     * @param string $Hotel
     */
    public function setHotel($Hotel)
    {
        $this->Hotel = $Hotel;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getStars()
    {
        return $this->Stars;
    }

    /**
     * @param string $Stars
     */
    public function setStars($Stars)
    {
        $this->Stars = $Stars;
    }
} 