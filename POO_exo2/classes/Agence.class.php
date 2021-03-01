<?php
class Agence
{
    public $_nom_ag;
    public $_adresse_ag;
    public $_post_ag;
    public $_ville_ag;
    public $_restau_ag;
    // fonction construct pour nom //
    public function __construct($_nom_ag, $_adresse_ag, $_post_ag, $_ville_ag){
        $this->nom_ag = $_nom_ag;
        $this->adresse_ag = $_adresse_ag;
        $this->post_ag = $_post_ag;
        $this->ville_ag = $_ville_ag;
    }
    // Restaurant d'entreprise //
    public function ticketrestau (){
    if ($this->restau_ag = true){
        echo "Restauration sur site";
    }
    else 
    {
        echo "Tickets restaurants";
    }
    }
}
?>