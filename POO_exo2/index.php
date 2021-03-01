<?php
    require 'classes/Employe.class.php';
    
$employe_1 = new Employe("Martin", "Jules", 50, "01/02/2010", "Directeur commercial", "Service commercial", 1, 1, 0);
$employe_1->annees();
$employe_1->prime();
$employe_1->vacances();
$employe_1->noel();
print_r($employe_1->affichage());
print_r($employe_1->vacances());
print_r($employe_1->noel());


$employe_2 = new Employe("Dupont", "Jean", 35, "01/02/2018", "VRP", "Service commercial", 2, 0, 0);
$employe_2->annees();
$employe_2->prime();
$employe_2->vacances();
$employe_2->noel();
print_r($employe_2->affichage());
print_r($employe_2->vacances());
print_r($employe_2->noel());


$employe_3 = new Employe("Lecoq", "Luc", 15, "01/03/2020", "Agent sécurité", "Service Sécurité", 0, 0, 0);
$employe_3->annees();
$employe_3->prime();
$employe_3->vacances();
$employe_3->noel();
print_r($employe_3->affichage());
print_r($employe_3->vacances());
print_r($employe_3->noel());


$employe_4 = new Employe("Bertrand", "Malika", 40, "01/01/2015", "Cheffe de produit", "Service marketing", 0, 1, 0);
$employe_4->annees();
$employe_4->prime();
$employe_4->vacances();
$employe_4->noel();
print_r($employe_4->affichage());
print_r($employe_4->vacances());
print_r($employe_4->noel());


$employe_5 = new Employe("Nguyen", "Agnès", 23, "01/01/2017", "Assistante direction", "Direction générale", 1, 1, 1);
$employe_5->annees();
$employe_5->prime();
$employe_5->vacances();
$employe_5->noel();
print_r($employe_5->affichage());
print_r($employe_5->vacances());
print_r($employe_5->noel());

?>

