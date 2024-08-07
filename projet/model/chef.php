<?php 

require_once(__DIR__ . "/../database/db.php");
     class chef{ 
     static public function onedriver($data) {
    $stmt = db::connect()->prepare('SELECT * FROM utilisateur WHERE poste = "chauffeur" AND id = :id');
    $stmt->bindParam(':id', $data, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $stmt->closeCursor();
    return $result;
}    
 static public function oneemploye($data) {
    $stmt = db::connect()->prepare('SELECT * FROM utilisateur WHERE poste = "employe" AND id = :id');
    $stmt->bindParam(':id', $data, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $stmt->closeCursor();
    return $result;
} 
      //fonction pour selectionner tous les chaffeurs
      static public function alldriver(){
        $stmt = db::connect()->prepare('SELECT * FROM utilisateur WHERE poste = "chauffeur";');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
       //fonction pour selectionner tous les vehicules
      static public function allcars(){
        $stmt = db::connect()->prepare('SELECT * FROM vehicule');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
      //fonction pour ajouter vehicule 
      
 static public function addcar($matricule, $marque, $modele, $couleur, $nserie, $type, $carburant, $kilometrage){
    $stmt = db::connect()->prepare('INSERT INTO vehicule(matricule, marque, modele, couleur, nserie, type, carburant, kilometrage, etat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->bindValue(1, $matricule);
    $stmt->bindValue(2, $marque);
    $stmt->bindValue(3, $modele);
    $stmt->bindValue(4, $couleur);
    $stmt->bindValue(5, $nserie);
    $stmt->bindValue(6, $type);
    $stmt->bindValue(7, $carburant);
    $stmt->bindValue(8, $kilometrage);
    $stmt->bindValue(9, "Disponible"); 
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;
}
     
    //fonction pour modifier vehicule 
static public function updateCar($matricule, $marque, $modele, $couleur, $nserie, $type, $carburant, $kilometrage){
    $stmt = db::connect()->prepare('UPDATE vehicule SET marque = ?, modele = ?, couleur = ?, nserie = ?, type = ?, carburant = ?, kilometrage = ? WHERE matricule = ?');
    $stmt->bindValue(1, $marque);
    $stmt->bindValue(2, $modele);
    $stmt->bindValue(3, $couleur);
    $stmt->bindValue(4, $nserie);
    $stmt->bindValue(5, $type);
    $stmt->bindValue(6, $carburant);
    $stmt->bindValue(7, $kilometrage);
    $stmt->bindValue(8, $matricule);
    $stmt->execute();
    $stmt = null;
}

      //fonction pour rechercher vehicule
      static public function searchV($value){
        $stmt = db::connect()->prepare('SELECT * FROM vehicule WHERE matricule LIKE ? OR etat LIKE ?');
        $valuer=$value.'%';
        $stmt -> bindValue(1,$valuer);
        $stmt -> bindValue(2,$valuer);
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
   //accepter demande
       static public function accepterd($chauffeur,$idemploye,$vehicule,$dated,$datef,$destination){
    $stmt = db::connect()->prepare('INSERT INTO reservation(id_chauff, id_employee, mat_vehicule, date_debut, date_fin,destination) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->bindValue(1, $chauffeur);
    $stmt->bindValue(2, $idemploye);
    $stmt->bindValue(3, $vehicule);
    $stmt->bindValue(4, $dated);
    $stmt->bindValue(5, $datef);
    $stmt->bindValue(6, $destination);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;
}
//changer letat de la demande 
      static public function changeEtat($numd){
            $stmt = db::connect()->prepare('UPDATE demande SET etat = "accepte" WHERE num_demande = ?');
            $stmt->bindValue(1, $numd);
            $stmt->execute();
             return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
      }
 //refuser la demande
   static public function refuser($numd){
            $stmt = db::connect()->prepare('UPDATE demande SET etat = "refuse" WHERE num_demande = ?');
            $stmt->bindValue(1, $numd);
            $stmt->execute();
             return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
      }     
  
}
 ?>