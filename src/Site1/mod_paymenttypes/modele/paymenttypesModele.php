<?php
/**
 *  Class PaymenttypesModele
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 *
 */

class PaymenttypesModele extends modele
{
    private $parametre = array(); //tableau


    function __construct($parametre)
    {

        $this->parametre = $parametre;
    }


    public function getListePaymenttypes()
    {

        $sql = "SELECT * FROM paymenttypes";

        $resultat = $this->executeRequete($sql);


       if ($resultat->rowCount() > 0) {

            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

                $listePaymenttypes[] = new PaymenttypesTable($row);

            }

            return $listePaymenttypes;

        } else {

            return null;
        }


    }

    public function getUnPaymenttype(){


        $sql = "SELECT * FROM paymenttypes WHERE Payment = ?";

        $resultat = $this->executeRequete($sql, array($this->parametre['Payment']));

        $unPaymenttype = new PaymenttypesTable($resultat->fetch(PDO::FETCH_ASSOC));

        return $unPaymenttype;

    }

    public function addPaymenttypes(PaymenttypesTable $valeurs) {
        $sql = "INSERT INTO paymenttypes (Description) VALUES (?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getDescription(),
        ]);
        return $idRequete->rowCount() > 0;
    }

    public function deletePaymenttypes (PaymenttypesTable $valeurs) {
        $sql = "SELECT * FROM paymenttypes WHERE Payment = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getPayment()
        ]);
        if ($idRequete->rowCount() > 0) {
            $sql2 = "DELETE FROM paymenttypes WHERE Payment = ?";
            $idRequete2 = $this->executeRequete($sql2, [
                $valeurs->getPayment()
            ]);  
        }
    }

    public function updatePaymenttypes (PaymenttypesTable $valeurs) {
        $sql = "UPDATE paymenttypes SET Description =? where Payment = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getDescription(),
            $valeurs->getPayment(),
        ]);
    }

    public function paymentExists($payment) {
        $sql = "SELECT COUNT(*) FROM paymenttypes WHERE Payment = ?";
        $resultat = $this->executeRequete($sql, [$payment]);
        return $resultat->fetchColumn() > 0;
    }
}
