<?php

class ReservationsModele extends Modele {
    private $parametre = array();

    function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function getListeReservations(){
        $sql = "SELECT * FROM reservations";
        $resultat = $this->executeRequete($sql);

        if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $listeReservations[] = new ReservationTable($row);
            }
            return $listeReservations;
        } else {
            return null;
        }
    }

    public function getUneReservation(){
        $sql = "SELECT * FROM reservations WHERE ResNo = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['ResNo']));
        
        if ($resultat->rowCount() > 0) {
            $uneReservation = new ReservationTable($resultat->fetch(PDO::FETCH_ASSOC));
            return $uneReservation;
        } else {
            return null;
        }
    }

    public function addReservation(ReservationTable $valeurs) {
        $room = intval($valeurs->getRoom());
        if ($room < 1 || $room > 9999) {
            $room = null;
        }
        
        $sql = "INSERT INTO reservations (LastName, FirstName, Address, City, State, Postal, Phone, Payment, Amount, Hotel, Room, DateIn, DateOut, DateNow) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        
        return $this->executeRequete($sql, [
            $valeurs->getLastName(),
            $valeurs->getFirstName(),
            $valeurs->getAddress(),
            $valeurs->getCity(),
            $valeurs->getState(),
            $valeurs->getPostal(),
            $valeurs->getPhone(),
            $valeurs->getPayment(),
            $valeurs->getAmount(),
            $valeurs->getHotel(),
            $room,
            $valeurs->getDateIn(),
            $valeurs->getDateOut()
        ]);
    }

    public function updateReservation(ReservationTable $valeurs) {
        $sql = "UPDATE reservations 
                SET LastName = ?, FirstName = ?, Address = ?, City = ?, State = ?, 
                    Postal = ?, Phone = ?, Payment = ?, Amount = ?, Hotel = ?, 
                    Room = ?, DateIn = ?, DateOut = ? 
                WHERE ResNo = ?";
        
        return $this->executeRequete($sql, [
            $valeurs->getLastName(),
            $valeurs->getFirstName(),
            $valeurs->getAddress(),
            $valeurs->getCity(),
            $valeurs->getState(),
            $valeurs->getPostal(),
            $valeurs->getPhone(),
            $valeurs->getPayment(),
            $valeurs->getAmount(),
            $valeurs->getHotel(),
            $valeurs->getRoom(),
            $valeurs->getDateIn(),
            $valeurs->getDateOut(),
            $valeurs->getResNo()
        ]);
    }

    public function deleteReservation(ReservationTable $valeurs) {
        $sql = "DELETE FROM reservations WHERE ResNo = ?";
        return $this->executeRequete($sql, [$valeurs->getResNo()]);
    }

    // Pour les listes déroulantes
    public function getListeHotels() {
        $sql = "SELECT * FROM hotels";
        $resultat = $this->executeRequete($sql);
        
        if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $listeHotels[] = new HotelTable($row);
            }
            return $listeHotels;
        }
        return null;
    }

    public function getListePaymenttypes() {
        $sql = "SELECT * FROM paymenttypes";
        $resultat = $this->executeRequete($sql);
        
        if ($resultat->rowCount() > 0) {
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $listePaymenttypes[] = new PaymenttypesTable($row);
            }
            return $listePaymenttypes;
        }
        return null;
    }
}