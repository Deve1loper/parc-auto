<?php
require_once(__DIR__ . "/../model/reservation.php");
class reservationcont{

	public function getallreservations(){
		 $reservations= reservation::allreservations();
		 return $reservations;
	}
}


  ?>