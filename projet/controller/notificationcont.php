<?php
require_once(__DIR__ . "/../model/notification.php");

class notificationcont{

	public function getalldemandes(){
		 $demande= notification::alldemandes();
		 return $demande;
	}


	public function getonedemande(){
       if (isset($_POST['num_demande'])) {
       	  $data= array('num_demande' => $_POST['num_demande']);
       	  $demande=notification::onedemande($data);
       	  return $demande;
       }

	}

		public function getalldriver(){
		 $drivers= notification::alldriver();
		 return $drivers;
	}
	public function getallcars(){
		 $cars= notification::allcars();
		 return $cars;
	}


}



  ?>