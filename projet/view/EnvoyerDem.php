
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

    main.form {
      width: 78vw;
    height: 86vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
    }

    .form__header {
      width: 100%;
      height: 8%;
      background-color: #fff4;
      padding: .8rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .form__header h1{
        font-size: 27px;

    }
    .form__header .input-group {
      width: 150%;
      height: 100%;
      background-color: #fff5;
      padding: 0 .8rem;
      border-radius: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: .2s;
      margin-right: auto;
    }

    .form__header .input-group:hover {
      width: 45%;
      background-color: #fff8;
      box-shadow: 0 .1rem .4rem #0002;
    }

    .form__header .input-group img {
      width: 1.2rem;
      height: 1.2rem;
    }

    .form__header .input-group input {
      width: 100%;
      padding: 0 .5rem 0 .3rem;
      background-color: transparent;
      border: none;
      outline: none;
    }

    .form__body {
    width: 88%;
    height: 89%;
    background-color: #fffb;
    margin: .6rem auto;
    border-radius: .6rem;
    overflow: auto;
    overflow: overlay;
    display: flex;
    flex-direction: column;
   
    align-items: center;
    position: relative;
}
    .form .form__body{
        padding: -2rem;
    }
    .form__body::-webkit-scrollbar {
      width: 0.5rem;
      height: 0.5rem;
    }



    .form__body::-webkit-scrollbar-thumb {
      border-radius: .5rem;
      background-color: #0004;
      visibility: hidden;
    }

    .form__body:hover::-webkit-scrollbar-thumb {
      visibility: visible;
    }

    form {
    width: 80%;
    max-height: 70%;
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 0.1rem;
    padding: 0.1rem;
    position: relative;
}

    form label {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 0.2rem;
      margin-left: 1rem; 
      width: 100%;
    }
    form textarea {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-left: -4rem;
  resize: vertical; 
}



    form input,
    form select {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-left: -4rem; 
    }

    .form input[type="submit"] {
  background-color: #ff8500;
  color: white;
  cursor: pointer;
  width:70%;
  margin-top:-1rem;
  margin-left:3rem;
  margin-right: -1rem;
  
}
    
.button-group {
    margin-top: 1rem;
    width: 100%;
    display: flex;
    justify-content: center;
    margin-left: 10rem;
}
 .button-group input {
      margin-left: 3rem;
    }

    .input-large {
      width: 100%; 
    }
    .form .form__header h1{
      font-size: 24px;
      font-weight: bolder;
    }
  </style>
</head>
 <script>
    function afficherNotification() {
      alert("Demande bien envoyée");
    }

    function soumettreFormulaire(event) {
      event.preventDefault(); // Empêche le formulaire de se soumettre normalement
      afficherNotification(); // Affiche la notification
      // Autres actions à effectuer lors de la soumission du formulaire, par exemple, l'envoi des données au serveur
    }

    document.addEventListener("DOMContentLoaded", function() {
      var formulaire = document.querySelector("form");
      formulaire.addEventListener("submit", soumettreFormulaire);
    });
  </script>
</head>
<body>
  <main class="form">
    <section class="form__header">
      <h1>Envoyer Demande</h1>
    </section>
    <section class="form__body">
      <form method="POST" action="homeEmp.php" onsubmit="soumettreFormulaire(event)">
        <label for="id">ID_Employe:</label>
        <input type="text" class="form-control input-large"  name="id_employe" required>

        <label for="id">Nom:</label>
        <input type="text" class="form-control input-large"  name="nom" required>
        <label for="id">Prenom:</label>
        <input type="text" class="form-control input-large"  name="prenom" required>


        <label for="service">Service:</label>
        <input type="text" class="form-control input-large"  name="service" required>

        <label for="date">Date:</label>
        <input type="date" class="form-control input-large" name="date" required>

        <label for="distance">Distance:</label>
        <textarea type="text" class="form-control input-large"  name="distance" required></textarea>
        
        <label for="cause">cause de Déplacement:</label>
        <select  name="cause">
          <option value="personnel">personnel</option>
          <option value="professionel">professionnel</option>
        
        </select>


        <label for="destination">Destination:</label>
        <textarea class="form-control input-large" name="destination" required></textarea>
<div class="form-group" style="width:80%;margin-top:5px;">
    <label>Date Debut:</label>
    <input type="date" class="form-control input-large" name="date_debut" style="margin-left: 75px;" required>
</div>
<div class="form-group" style="width:80%;margin-top:5px;">
    <label>heure_debut:</label>
    <input type="time" class="form-control input-large" name="heure_debut" style="margin-left: 75px;" required>
</div>

<div class="form-group" style="width:80%;margin-top:5px;">
    <label>Date Fin:</label>
    <input type="date" class="form-control input-large" name="date_fin" style="margin-left: 75px;" required>
</div>
<div class="form-group" style="width:80%;margin-top:5px;">
    <label>heure_fin:</label>
    <input type="time" class="form-control input-large" name="heure_fin" style="margin-left: 75px;" required>
</div>



        <div class="button-group">
  <input type="submit" name="Envoyer" class="btn btn-warning" value="Envoyer" >
  <ion-icon name="paper-plane-outline" style="color: white; font-size: 1.3rem; margin-top: -0.35rem; margin-left: -2.2rem; width:40%"></ion-icon>
  <input type="submit" onclick="Notification()" name="Cancel" class="btn btn-default" value="Cancel">
</div>

      </form>
    </section>
  </main>
  <script>
  function afficherNotification(message) {
    alert(message);
  }

  function soumettreFormulaire(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    // Autres actions à effectuer lors de la soumission du formulaire, par exemple, l'envoi des données au serveur

    // Simuler l'envoi du formulaire avec un délai de 1 seconde
    setTimeout(function() {
      var formulaire = document.querySelector("form");
      formulaire.reset(); // Réinitialiser le formulaire après l'envoi

      var message = "La demande n'a pas été envoyée.";
      if (condition pour vérifier si la demande a été envoyée avec succès) {
        message = "La demande a été envoyée avec succès.";
      }

      afficherNotification(message);
    }, 1000);
  }

  document.addEventListener("DOMContentLoaded", function() {
    var formulaire = document.querySelector("form");
    formulaire.addEventListener("submit", soumettreFormulaire);
  });
</script>
</body>
</html>