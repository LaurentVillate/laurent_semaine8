<?php
require 'classes/Agence.class.php';
class Employe
{
    public $_nom;
    public $_prenom;
    public $_dateEmbauche;
    public $_anciennete;
    public $_salaire;
    public $_fonction;
    public $_service;
    public $_enf_0_10;
    public $_enf_11_15;
    public $_enf_16_18;
    public $_nom_ag;
    // fonction construct pour nom //
    public function __construct($_nom, $_prenom, $_salaire, $_dateEmbauche, $_fonction, $_service, $_enf_0_10, $_enf_11_15, $_enf_16_18){
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->salaire = $_salaire;
        $this->embauche = $_dateEmbauche;
        $this->fonction = $_fonction;
        $this->service = $_service;
        $this->enf_0_10 = $_enf_0_10;
        $this->enf_11_15 = $_enf_11_15;
        $this->enf_16_18 = $_enf_16_18;
    }

    // Fonction pour calculer l'ancienneté de l'employé //  
    public function annees ()
    {
        $_today = date("d/m/Y");
        $_today_explode = explode("/", $_today);
        $_an_today = $_today_explode[2];
        $_embauche_explode = explode("/", $this->dateEmbauche);
        $_an_embauche = $_embauche_explode[2];
        $this->anciennete = $_an_today - $_an_embauche;
    }

    // Fonction pour calculer la prime annuelle //
    public function prime()
    {
    $this->prime = (((($this->salaire)/100)*5)+((($this->salaire)/100)*2)*$this->anciennete)*1000;
    }

    public function affichage()
    {
        echo "- Prime annuelle $this->nom $this->prenom : $this->prime €<br>";
        $_today = date("d/m/Y");
        $_today_explode = explode("/", $_today);
        $_jour = $_today_explode [0];
        $_mois = $_today_explode [1];   
         //if ($_jour == 30 && $_mois = 11){//
        if ($_jour == $_jour && $_mois = $_mois){
            echo "Ordre de virement d'un montant de : $this->prime € envoyé à la banque<br><br>";
        }
        
    }
    public function vacances()
    {
        if ($this->anciennete >=1){
            echo "<br>Chèques vacances";
        }
    }
    public function noel(){
        if ($this->enf_0_10 >= 1 || $this->enf_11_15 >= 1 || $this->enf_16_18 >= 1){
            echo "<br>Chèques Noël: oui<br>"; 
            if ($this->enf_0_10 >= 1) {
                echo "$this->enf_0_10 chèque(s) Noël de 20 €<br>";
            }  
            else if ($this->enf_11_15 >= 1)  {
                echo "$this->enf_11_15 chèque(s) Noël de 30 €<br>";
            } 
            else {
                echo "$this->enf_16_18 chèque(s) Noël de 50 €<br>";
            }    
        }
        else{
            echo "<br>Chèques Noël: non<Br>";
        }
    }
}



?>