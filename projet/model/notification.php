<?php 

require_once(__DIR__ . "/../database/db.php");
     class notification{  

      //la liste des demandes en attente 
      static public function alldemandes(){
        $stmt = db::connect()->prepare("SELECT * FROM demande WHERE etat = 'en attente'");
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
       static public function onedemande($data){
        $num= $data['num_demande'];
        $stmt = db::connect()->prepare('SELECT * FROM demande WHERE num_demande = :num_demande');
        $stmt ->execute( array(":num_demande" =>$num ));
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;

       }

        //fonction pour selectionner tous les chaffeurs
      static public function alldriver(){
        $stmt = db::connect()->prepare('SELECT * FROM utilisateur WHERE poste = "chauffeur";');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
      static public function allcars(){
        $stmt = db::connect()->prepare('SELECT * FROM vehicule');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }


  }

 ?>