<?php 

require_once(__DIR__ . "/../database/db.php");

class demande{ 
/**************************** hadi recuperer kml les infos ta3 demande machi bl id (pour cptr )*/
      static public function getlistedemande(){
        $stmt = db::connect()->prepare('SELECT * FROM demande');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }

/******************************* Lazem session bch tmchi *******************/
//recuperer la demande pour chaque employe spécifique 
 
//fonction pour envoyer  une demande
static public function envoyer($id_employe, $nom, $prenom, $service, $date, $distance, $cause, $destination, $date_debut,
 $heure_debut, $date_fin, $heure_fin)
{
    $stmt = db::connect()->prepare('
       INSERT INTO demande (
            id_employe,
            nom,
            prenom,
            service,
            date,
            distance,
            cause,
            destination,
            date_debut,
            heure_debut,
            date_fin,
            heure_fin
        ) VALUES (
            :id_employe,
            :nom,
            :prenom,
            :service,
            :date,
            :distance,
            :cause,
            :destination,
            :date_debut,
            :heure_debut,
            :date_fin,
            :heure_fin
        )');
    // Lié un paramètre à un nom de variable spécifique
    $stmt->bindParam(':id_employe', $id_employe);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':service', $service);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':distance', $distance);
    $stmt->bindParam(':cause', $cause);
    $stmt->bindParam(':destination', $destination);
    $stmt->bindParam(':date_debut', $date_debut);
    $stmt->bindParam(':heure_debut', $heure_debut);
    $stmt->bindParam(':date_fin', $date_fin);
    $stmt->bindParam(':heure_fin', $heure_fin);
    if($stmt->execute()){
        return 'ok';
    }else{
        return 'Error' ; 
    }
    //Fermer La BDD
    $stmt->close();
    $stmt =null;
}
















}
?>