<?php
require_once(__DIR__ . "/../model/user.php");
class usercont{
	public function getallusers(){
		 $users= user::getall();
		 return $users;
	}

  //le nom et prenom de l'utilisateur
   public function account($email,$pass){
   	 $account= user::account($email,$pass);
   	 return $account;
   }

//fonction ajouter utilisateur
public function ajouteruser($id,$email,$password,$nom,$prenom,$telephone,$poste,$departement,$etat,$responsable){
      $add=user::adduser($id,$email,$password,$nom,$prenom,$telephone,$poste,$departement,$etat,$responsable);
  }
// fonction supprimer user
  public function suppuser()
  {
      if (isset($_POST['id'])) {
          $data['id'] = $_POST['id'];
          $result = user::supp($data);
          if ($result) {
            // Redirection vers la page d'accueil de l'administrateur après la suppression réussie
            header('Location: http://localhost/projet/view/homeAdmin.php');
            exit; 
         
      }
  }}

//fonction qui requper les information de l'etudient pour le modifier
    
     public function getOneUser()
     {
         if (isset($_POST['id'])) {
             $data = array('id' => $_POST['id']);
             $edit = user::getuser($data);//appeler la function getstudent de la class studentcont du controlers
 
             return $edit;
         }
 
     }
      
//fonction pour modifier
     public function updateuser($id,$email,$password,$nom,$prenom,$telephone,$poste,$departement,$etat,$responsable){
        $add=user::update($id,$email,$password,$nom,$prenom,$telephone,$poste,$departement,$etat,$responsable);
    }


   
}
  ?>