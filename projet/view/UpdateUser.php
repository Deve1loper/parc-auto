<?php 
if (isset($_POST['id'])) {
    require_once(__DIR__ . "/../controller/usercont.php");
// ***************** ici recuperer ne fonctionne pas ********************************** 
    // Instancier un objet de la classe usercont
    $modifstudent = new usercont();
    
    // Utiliser la fonction suppuser pour supprimer l'utilisateur
    $modifstudent->getOneUser();
    
    // Rediriger vers la page listeU.php après la modification réussie
    header('Location: listeU.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
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
    width: 82vw;
    height: 75vh;
    background-color: #fff5;
    backdrop-filter: blur(7px);
    box-shadow: 0 0.4rem 0.8rem #0005;
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

    .form__header h1 {
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

    .form .form__body {
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



    form input,
    form select {
      width: 110%;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-left: -11rem;
    }

    .form input[type="submit"] {
      background-color: #ff8500;
      color: white;
      cursor: pointer;
      width: 70%;
      margin-top: -1rem;
      margin-left: 3rem;
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

    .form .form__header h1 {
      font-size: 24px;
      font-weight: bolder;
    }
    .form-control {
    margin-left: -11rem;
    display: block;
    width: 110%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

  </style>
</head>
<body>
  <main class="form">
    <section class="form__header">
      <h1>Modifier Utilisateur</h1>
    </section>
    
    <section class="form__body">
      <form method="POST" action="homeAdmin.php" onsubmit="soumettreFormulaire(event)">

        <label for="id">ID :</label>
        
        <input type="text" class="form-control input-large" name="id" required>

        <label for="email">Email:</label>
        <input type="text" class="form-control input-large" name="email" required>
        <label for="password">Password:</label>
        <input type="password" class="form-control input-large" name="password" required>


        <label for="nom">Nom:</label>
        <input type="text" class="form-control input-large" name="nom" required>


        <label for="prenom">Prenom:</label>
        <input type="text" class="form-control input-large" name="prenom" required></input>

        <label for="telephone">Telephone:</label>
        <input type="text" class="form-control input-large" name="telephone" required></input>

        <label for="poste">Poste :</label>
        <select name="poste">
          <option value="chef de parc">chef de parc</option>
          <option value="employe">Employe</option>
          <option value="chauffeur">chauffeur</option>
          <option value="responsable">Responsable</option>
          <option value="administrateur">Administrateur</option>
        </select>
        <label for="departement">Departement:</label>
        <input class="form-control input-large" name="departement" required></input>

        <label for="etat">Etat :</label>
        <select name="etat">
          <option value="Desactive">Desactive</option>
          <option value="Active">Active</option>
        </select>

        <label for="responsable">Responsable:</label>
        <input class="form-control input-large" name="responsable" required></input>

        <div class="button-group">
        <input type="submit" name="Modifier" class="btn btn-warning" value="Modifier">

        <input type="submit" onclick="listeU()"  name="Cancel" class="btn btn-default" value="Cancel">
        </div>

      </form>
    </section>
  </main>

</body>
</html>








