<?php

    class ReservationsVue {
        private $parametre = array(); //tableau
        private $tpl; // objet smarty
    
    
    
        public function __construct($parametre){
    
            $this->parametre = $parametre;
    
            $this->tpl = new Smarty();
    
        }
    
        private function chargementValeurs() {
    
            $this->tpl->assign('login', 'Ici le nom de la personne identifiée');
    
            $this->tpl->assign('titreVue', 'Les Hôtels');
    
        }
    
    
        public function genererAffichageReservations($valeurs){
    
            $this->chargementValeurs();
    
            $this->tpl->assign('titrePage', 'Liste des réservations');
    
            $this->tpl->assign('listeReservations', $valeurs);
    
            $this->tpl->display('mod_reservation/vue/reservationListeVue.tpl');
        }
    
        public function genererAffichageFiche($valeurs, $listeHotels, $listePaymenttypes){
            $this->chargementValeurs();

            switch ($this->parametre['action']){
                case "form_consulter":
                    $this->tpl->assign('action', 'consulter');
                    $this->tpl->assign('readOnly', "disabled");
                    $this->tpl->assign('readOnlyTwo', "disabled");
                    $this->tpl->assign('titrePage', 'Fiche Réservation : Consultation');
                    break;

                case "form_ajouter":
                case "ajouter":
                    $this->tpl->assign('action', 'ajouter');
                    $this->tpl->assign('readOnly', "");
                    $this->tpl->assign('readOnlyTwo', "");
                    $this->tpl->assign('titrePage', 'Fiche Réservation : Ajout');
                    break;

                case "form_modifier":
                case "modifier":
                    $this->tpl->assign('action', 'modifier');
                    $this->tpl->assign('readOnly', "");
                    $this->tpl->assign('readOnlyTwo', "");
                    $this->tpl->assign('titrePage', 'Fiche Réservation : Modification');
                    break;

                case "form_supprimer":
                case "supprimer":
                    $this->tpl->assign('action', 'supprimer');
                    $this->tpl->assign('readOnly', "disabled");
                    $this->tpl->assign('readOnlyTwo', "disabled");
                    $this->tpl->assign('titrePage', 'Fiche Réservation : Suppression');
                    break;
            }

            $this->tpl->assign('uneReservation', $valeurs);
            $this->tpl->assign('listeHotels', $listeHotels);
            $this->tpl->assign('listePaymenttypes', $listePaymenttypes);
            
            $this->tpl->display('mod_reservation/vue/reservationFicheVue.tpl');
        }
    }