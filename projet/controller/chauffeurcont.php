
<?php
require_once(__DIR__ . "/../model/chauffeur.php");


class chauffeurcont{

	public function reservationchauffeur($data){
		 $reservations= chauffeur::reservationschauffeur($data);
		 return $reservations;
	}
}


  ?>