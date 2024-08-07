<?php 

require_once(__DIR__ . "/../database/db.php");
     class reservation{  
      
      static public function allreservations(){
        $stmt = db::connect()->prepare('SELECT * FROM reservation');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
      


  }

 ?>