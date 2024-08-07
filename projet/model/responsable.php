<?php 

require_once(__DIR__ . "/../database/db.php");


     class responsable{  

      // afficher toutes les demandes des employes d'un responsable
      static public function demanderesponsable($responsable) {
         $stmt = db::connect()->prepare("SELECT * FROM demande WHERE id_employe IN (SELECT id_employe FROM utilisateur WHERE Responsable LIKE :responsable) AND etat NOT IN ('refuse', 'accepte', 'en attente')");
         $stmt->bindValue(':responsable', '%'.$responsable.'%');

          $stmt->execute();
          $demandes = $stmt->fetchAll();
          $stmt->closeCursor();
          return $demandes;
     }
     
     //changer letat de la demande 
      static public function changeetat($numd){
            $stmt = db::connect()->prepare('UPDATE demande SET etat = "en attente" WHERE num_demande = ?');
            $stmt->bindValue(1, $numd);
            $stmt->execute();
             return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
      }



      }
      


  

 ?>