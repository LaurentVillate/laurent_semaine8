<?php
class Directeur
{
    public $_nom_dir;
    public $_prenom_dir;
    public $_embauche_dir;
    public $_anciennete_dir;
    public $_salaire_dir;
    
    // fonction construct pour nom //
    public function __construct($_nom_dir, $_prenom_dir, $_embauche_dir, $_salaire_dir){
        $this->nom_dir = $_nom_dir;
        $this->prenom_dir = $_prenom_dir;
        $this->salaire_dir = $_salaire_dir;
        $this->embauche_dir = $_embauche_dir;
        $this->fonction_dir = $_fonction_dir;
    }
    public function annees ()
    {
        $_today = date("d/m/Y");
        $_today_explode = explode("/", $_today);
        $_an_today = $_today_explode[2];
        $_embauche_dir_explode = explode("/", $this->embauche_dir);
        $_an_embauche_dir = $_embauche_dir_explode[2];
        $this->anciennete_dir = $_an_today - $_an_embauche_dir;
    }

    // Fonction pour calculer la prime annuelle //
    public function prime_dir()
    {
    $this->prime = (((($this->salaire)/100)*7)+((($this->salaire)/100)*3)*$this->anciennete)*1000;
    }

    public function affichage_dir()
    {
        echo "- Prime annuelle du directeur $this->nom_dir $this->prenom_dir : $this->prime €<br>";
        $_today = date("d/m/Y");
        $_today_explode = explode("/", $_today);
        $_jour = $_today_explode [0];
        $_mois = $_today_explode [1];   
         //if ($_jour == 30 && $_mois = 11){//
        if ($_jour == $_jour && $_mois = $_mois){
            echo "Ordre de virement d'un montant de : $this->prime € envoyé à la banque<br><br>";
        }

}