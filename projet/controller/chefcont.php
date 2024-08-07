<?php
require_once(__DIR__ . "/../model/chef.php");

class chefcont{
	public function getalldriver(){
		 $drivers= chef::alldriver();
		 return $drivers;
	}

	public function getallcars(){
		 $cars= chef::allcars();
		 return $cars;
	}
 
  public function ajoutervehicule($matricule,$marque,$modele,$couleur,$nserie,$type,$carburant,$kilometrage){
  	  $add=chef::addcar($matricule,$marque,$modele,$couleur,$nserie,$type,$carburant,$kilometrage);
  	  echo '<script>alert("Le véhicule a été ajouté avec succès.");</script>';
  	
  }

    public function modifiervehicule($matricule,$marque,$modele,$couleur,$nserie,$type,$carburant,$kilometrage){
  	  $update=chef::updateCar($matricule,$marque,$modele,$couleur,$nserie,$type,$carburant,$kilometrage);
  	  echo '<script>alert("Le véhicule a été modifié.");</script>';
  	
  }


  public function getonedriver($data){
  	 $driver= chef::onedriver($data);
		 return $driver;
  }

  public function getoneemploye($data){
  	 $employe= chef::oneemploye($data);
		 return $employe;
  }


  //accepter demande 
 public function accepterdemande($chauffeur,$idemploye,$vehicule,$dated,$datef,$destination){
  	  $acc=chef::accepterd($chauffeur,$idemploye,$vehicule,$dated,$datef,$destination);
  }
  //changer letat de la demande appr l'accepte
 public function changeEtatDemande($numd){
 	   $change=chef::changeEtat($numd);
 }
  //refuser demande
 public function refuserDemande($numd){
     $change=chef::refuser($numd);
 }


}



  ?>