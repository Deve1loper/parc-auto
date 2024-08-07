
<?php 

// require_once(__DIR__ . "/../database/db.php");
//      class log{  
      
//       static public function loginm($user,$pass){
//         $stmt = db::connect()->prepare('SELECT poste FROM utilisateur WHERE email LIKE ? AND password LIKE ?');
//        $email=$user.'%';
//        $passw=$pass.'%';
//         $stmt -> bindValue(1,$email);
//         $stmt -> bindValue(2,$passw);
//         $stmt ->execute();
//         return $stmt->fetchAll();
//         $stmt->close();
//         $stmt =null;
//       }

//   }



require_once(__DIR__ . "/../database/db.php");

class log {
    static public function loginm($user, $pass) {
        $stmt = db::connect()->prepare('SELECT poste FROM utilisateur WHERE email LIKE ? AND password LIKE ?');
        $email = $user ;
        $passw = $pass ;
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $passw);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }
}




 ?>