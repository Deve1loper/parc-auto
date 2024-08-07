<?php 

require_once(__DIR__ . "/../database/db.php");
     class user{  
      
      static public function getall(){
        $stmt = db::connect()->prepare('SELECT * FROM utilisateur');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }
//nom et prenom de l'utilisateur 
    static public function account($email,$pass){
        $stmt = db::connect()->prepare('SELECT * FROM utilisateur WHERE email LIKE ? AND password LIKE ?');
        $emaill=$email.'%';
        $passs=$pass.'%';
        $stmt -> bindValue(1,$emaill);
        $stmt -> bindValue(2,$passs);
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
      }

//fonction pour ajouter un utilisateur 
static public function adduser($id,$email,$password,$nom,$prenom,$telephone,$poste,$departement,$etat,$responsable){
        $stmt = db::connect()->prepare('
            INSERT INTO utilisateur(
                id,
                email,
                password,
                nom,
                prenom,
                telephone,
                poste,
                departement,
                etat,
                responsable
            ) VALUES (
            :id,
            :email,
            :password,
            :nom,
            :prenom,
            :telephone,
            :poste,
            :departement,
            :etat,
            :responsable
            
            )');
        //liée un parametre à un nom de variable spécifique
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':poste', $poste);
        $stmt->bindParam(':departement', $departement);
        $stmt->bindParam(':etat', $etat);
        $stmt->bindParam(':responsable', $responsable);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'Error' ; 
        }
        //Fermer La BDD
        $stmt->close();
        $stmt =null;

}
//fonction pour supprimer un utilisateur
    static public function supp($data){
      
       $id = $data['id'];
       try{
           $query = 'DELETE FROM utilisateur WHERE id=:id';
           $stmt = DB::connect()->prepare($query);
           $stmt->execute(array(":id"=> $id));
           //executer la requete 
           if($stmt->execute()){
               return 'ok';
           }
         
       }catch(PDOException $ex){
           echo ' Error!!!!' . $ex->getMessage();     }
   } 
//***************************************************   ici  fonct recuperer user  ***************************/
//fonction qui récupère l utilisateur à modifié
    static public function getuser($data){
        $id = $data['id'];
        try{
             //connection et la requete a envoye vers BDD
            $query = 'SELECT * FROM utilisateur WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            //executer la requete  avec un biendvalue integrer
            $stmt->execute(array(":id"=> $id));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo ' Error!!!!' . $ex->getMessage();     }
    }
    
//fonction qui modifie un utilisateur
    static public function update($id,$email,$password,$nom,$prenom,$telephone,$poste,$departement,$etat,$responsable){
         //connection et la requete a envoye vers BDD
        $stmt = DB::connect()->prepare('UPDATE  utilisateur SET 
    id = :id,
    email = :email,
    password = :password,
    nom = :nom,
    prenom = :prenom,
    telephone = :telephone,
    poste = :poste,
    departement = :departement,
    etat = :etat,
    responsable = :responsable 
WHERE id = :id ');


        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':poste', $poste);
        $stmt->bindParam(':departement', $departement);
        $stmt->bindParam(':etat', $etat);
        $stmt->bindParam(':responsable', $responsable);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'Error!!!!';
        }
         //fermer la BDD
        $stmt->close();
        $stmt = null;
    }
      

  }

 ?>