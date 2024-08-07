<?php
if (isset($_POST['id'])) {
    require_once(__DIR__ . "/../controller/usercont.php");
    
    // Instancier un objet de la classe usercont
    $suppstudent = new usercont();
    
    // Utiliser la fonction suppuser pour supprimer l'utilisateur
    $suppstudent->suppuser($_POST);
    
    // Rediriger vers la page listeU.php après la suppression réussie
    header('Location: listeU.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <!-- CSS Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <style type="text/css">

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
      color: black;
    }

    body {
      min-height: 70vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
   
    main.box {
    width: 400px;
    height: 220px;
    background-color: #f0f0f0cc;
    border-radius: 20px;
    box-shadow: 0 0 0 4px rgb(211 125 12 / 57%);
    padding: 1rem;
    }

    h1 {
      font-weight: bolder;
      font-size: 20px;
      margin-bottom: 2rem;
      text-align: center;
    }

    p {
      margin-bottom: 1rem;
    }
    button-group {
     
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    }
    .button-group button {
        color: white;
      margin-left: 0.5rem;
      font-weight: bold; 
    }
    
   
  </style>
</head>
<body>
<main class="box">
<h1>Supprimer Utilisateur</h1>
    <p style="font-family: Times New Roman; text-align: center; font-size: 18px;">Êtes-vous sûr de vouloir supprimer cet utilisateur ?</p>
    <p class="text-warning" style="font-family: Times New Roman; text-align: center; font-size: 16px;"><small>Cette action ne peut pas être annulée.</small></p>
    <div class="button-group d-flex justify-content-center">
        <button class="btn btn-warning" onclick="supprimerUtilisateur()">Supprimer</button>
        <button class="btn btn-warning" onclick="annulerSuppression()">Annuler</button>
    </div>
</main>

<!-- JavaScript Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Ajoutez jQuery avant votre script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function supprimerUtilisateur() {
        var userId = '<?php echo $_POST["id"]; ?>';

        // Envoyer la requête de suppression au backend en utilisant AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'suppUser.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Traitement de la réponse du backend
                    if (xhr.responseText === 'ok') {
                        // Suppression réussie, vous pouvez afficher un message de succès
                        alert('Utilisateur supprimé avec succès.');
                        // Rafraîchir la page pour refléter les changements
                        location.reload();
                    } else {
                        // Gérer les erreurs ou afficher un message d'erreur à l'utilisateur
                        alert('Une erreur s\'est produite lors de la suppression de l\'utilisateur.');
                    }
                } else {
                    // Gérer les erreurs ou afficher un message d'erreur à l'utilisateur
                    alert('Une erreur s\'est produite lors de la suppression de l\'utilisateur.');
                }
            }
        };
        xhr.send('id=' + encodeURIComponent(userId));
    }

    function annulerSuppression() {
        // Rediriger vers la page listeU.php
        window.location.href = 'listeU.php';
    }
</script>

</body>
</html>
