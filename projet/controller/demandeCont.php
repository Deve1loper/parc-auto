<?php
require_once(__DIR__ . "/../model/demande.php");

class demandeCont{
  


//fonction envoyer un utilisateur
  public function send($id_employe, $nom, $prenom, $service, $date, $distance, $cause,
   $destination, $date_debut, $heure_debut, $date_fin, $heure_fin){

    $send= demande::envoyer($id_employe, $nom, $prenom, $service, $date, $distance, $cause,
     $destination, $date_debut, $heure_debut, $date_fin, $heure_fin);
 }
 //get all demandes
public function getalldemandes(){
   $demandes= demande::getlistedemande();
   return $demandes;
} 
 





}?>    

