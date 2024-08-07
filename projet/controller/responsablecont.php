
<?php
require_once(__DIR__ . "/../model/responsable.php");


class responsablecont{

	public function demandesresponsable($responsable){
		 $demande= responsable::demanderesponsable($responsable);
		 return $demande;
	}
   
  public function changeetat($numd){
 	   $change=responsable::changeetat($numd);
 } 



}


  ?>