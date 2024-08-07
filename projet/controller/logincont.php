<?php 

require_once(__DIR__ . "/../model/log.php");

class logincont {

    public function login($email, $pass) {
         $errorMessage = "";
        if (empty($email) || empty($pass)) {
            $this->errorMessage =  "Veuillez remplir tous les champs";
            return ;
        }
        
        $poste = log::loginm($email, $pass);
        foreach ($poste as $k) {
            if ($k['poste'] == "chefparc") { //if chef du parc
                $redirectUrl = "../chefhome.php?email=" . urlencode($email) . "&pass=" . urlencode($pass);
                echo '<script>window.location.href = "' . $redirectUrl . '";</script>';
                return; // Terminer la fonction après la redirection
            }
            if ($k['poste'] == "chauffeur") { //if chauffeur
                $redirectUrl = "../chauffeurhome.php?email=" . urlencode($email) . "&pass=" . urlencode($pass);
                echo '<script>window.location.href = "' . $redirectUrl . '";</script>';
                return; // Terminer la fonction après la redirection
            }
            if ($k['poste'] == "responsable") { //if responsable
                $redirectUrl = "../responsablehome.php?email=" . urlencode($email) . "&pass=" . urlencode($pass);
                echo '<script>window.location.href = "' . $redirectUrl . '";</script>';
                return; // Terminer la fonction après la redirection
            }
            if ($k['poste'] == "administrateur") { //if responsable
                $redirectUrl = "../homeAdmin.php?email=" . urlencode($email) . "&pass=" . urlencode($pass);
                echo '<script>window.location.href = "' . $redirectUrl . '";</script>';
                return; // Terminer la fonction après la redirection
            }
            if ($k['poste'] == "employe") { //if responsable
                $redirectUrl = "../homeEmp.php?email=" . urlencode($email) . "&pass=" . urlencode($pass);
                echo '<script>window.location.href = "' . $redirectUrl . '";</script>';
                return; // Terminer la fonction après la redirection
            }
        }

        
        $this->errorMessage = "email ou mot de passe incorrect"; // Stockez le message d'erreur dans la variable
       
    }
}

  ?>