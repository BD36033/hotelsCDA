<?php

class ReservationTable
{
    private $ResNo = "";
    private $LastName = "";
    private $FirstName = "";
    private $Address = "";
    private $City = "";
    private $State = "";
    private $Postal = "";
    private $Phone = "";
    private $Payment = "";
    private $Amount = "";
    private $Hotel = "";
    private $Room = "";
    private $DateIn = "";
    private $DateOut = "";
    private $DateNow = "";

    public function hydrater(array $row)
    {
        foreach ($row as $k => $v) {
            $setter = 'set' . ucfirst($k);
            if (method_exists($this, $setter)) {
                $this->$setter($v);
            }
        }
    }

    public function __construct($data = null)
    {
        if ($data != null) {
            $this->hydrater($data);
        }
    }

    // Getters
    public function getResNo() 
    { 
        return $this->ResNo; 
    }

    public function getLastName() 
    { 
        return $this->LastName; 
    }

    public function getFirstName() 
    {
         return $this->FirstName; 
    }
    public function getAddress() 
    { 
        return $this->Address; 
    }
    public function getCity() 
    { 
        return $this->City;
    }
    public function getState() 
    { 
        return $this->State; 
    }
    public function getPostal() 
    { 
        return $this->Postal; 
    }
    public function getPhone() { return $this->Phone; }
    public function getPayment() { return $this->Payment; }
    public function getAmount() { return $this->Amount; }
    public function getHotel() { return $this->Hotel; }
    public function getRoom() { return $this->Room; }
    public function getDateIn() { return $this->DateIn; }
    public function getDateOut() { return $this->DateOut; }
    public function getDateNow() { return $this->DateNow; }

    // Setters
    public function setResNo($ResNo) { $this->ResNo = $ResNo; }
    public function setLastName($LastName) { $this->LastName = $LastName; }
    public function setFirstName($FirstName) { $this->FirstName = $FirstName; }
    public function setAddress($Address) { $this->Address = $Address; }
    public function setCity($City) { $this->City = $City; }
    public function setState($State) { $this->State = $State; }
    public function setPostal($Postal) { $this->Postal = $Postal; }
    public function setPhone($Phone) { $this->Phone = $Phone; }
    public function setPayment($Payment) { $this->Payment = $Payment; }
    public function setAmount($Amount) { $this->Amount = $Amount; }
    public function setHotel($Hotel) { $this->Hotel = $Hotel; }
    public function setRoom($Room) { $this->Room = $Room; }
    public function setDateIn($DateIn) { $this->DateIn = $DateIn; }
    public function setDateOut($DateOut) { $this->DateOut = $DateOut; }
    public function setDateNow($DateNow) { $this->DateNow = $DateNow; }
} 