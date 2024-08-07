<?php 

require_once(__DIR__ . "/../database/db.php");


     class chauffeur{  
      
      static public function reservationschauffeur($data){
        $stmt = db::connect()->prepare('SELECT * FROM reservation WHERE id_chauff LIKE ? ');
        $id=$data.'%';
        $stmt -> bindValue(1,$id);
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
      }
      


  

 ?>