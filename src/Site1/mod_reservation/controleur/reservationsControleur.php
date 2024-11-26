<?php

class ReservationsControleur
{
    private $parametre = array(); //tableau
    private $oModele; // Object
    private $oVue; // Object

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->oModele = new ReservationsModele($parametre);
        $this->oVue = new ReservationsVue($parametre);
    }

    public function liste(){
        $valeurs = $this->oModele->getListeReservations();
        $this->oVue->genererAffichageReservations($valeurs);
    }

    public function form_consulter(){
        $valeurs = $this->oModele->getUneReservation();
        $listeHotels = $this->oModele->getListeHotels();
        $listePaymenttypes = $this->oModele->getListePaymenttypes();
        
        $this->oVue->genererAffichageFiche($valeurs, $listeHotels, $listePaymenttypes);
    }

    public function form_modifier(){
        $valeurs = $this->oModele->getUneReservation();
        $listeHotels = $this->oModele->getListeHotels();
        $listePaymenttypes = $this->oModele->getListePaymenttypes();
        
        $this->oVue->genererAffichageFiche($valeurs, $listeHotels, $listePaymenttypes);
    }

    public function form_supprimer(){
        $valeurs = $this->oModele->getUneReservation();
        $listeHotels = $this->oModele->getListeHotels();
        $listePaymenttypes = $this->oModele->getListePaymenttypes();
        
        $this->oVue->genererAffichageFiche($valeurs, $listeHotels, $listePaymenttypes);
    }

    public function form_ajouter(){
        $prepareReservation = new ReservationTable();
        // Initialiser avec des valeurs vides
        $prepareReservation->setResNo('');
        $prepareReservation->setLastName('');
        $prepareReservation->setFirstName('');
        $prepareReservation->setAddress('');
        $prepareReservation->setCity('');
        $prepareReservation->setState('');
        $prepareReservation->setPostal('');
        $prepareReservation->setPhone('');
        $prepareReservation->setPayment('');
        $prepareReservation->setAmount('');
        $prepareReservation->setHotel('');
        $prepareReservation->setRoom('');
        $prepareReservation->setDateIn('');
        $prepareReservation->setDateOut('');
        
        $listeHotels = $this->oModele->getListeHotels();
        $listePaymenttypes = $this->oModele->getListePaymenttypes();
        
        $this->oVue->genererAffichageFiche($prepareReservation, $listeHotels, $listePaymenttypes);
    }

    public function ajouter(){
        if (!empty($this->parametre['LastName']) && !empty($this->parametre['FirstName'])) {
            $controleReservation = new ReservationTable($this->parametre);
            $this->oModele->addReservation($controleReservation);
            $this->liste();
        } else {
            $this->form_ajouter();
        }
    }

    public function supprimer(){
        $controleReservation = new ReservationTable($this->parametre);
        $this->oModele->deleteReservation($controleReservation);
        $this->liste();
    }

    public function modifier(){
        if (!empty($this->parametre['LastName']) && !empty($this->parametre['FirstName'])) {
            $controleReservation = new ReservationTable($this->parametre);
            $this->oModele->updateReservation($controleReservation);
            $this->liste();
        } else {
            $this->form_modifier();
        }
    }
}