<?php
// Récupérer les données envoyées depuis JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Vérifier si les données ont été correctement reçues
if (!empty($data)) {
    // Accéder aux valeurs des données
    $matricule = $data[0];
    $marque = $data[1];
    $modele = $data[2];
    $couleur = $data[3];
    $nserie = $data[4];
    $type = $data[5];
    $carburant = $data[6];
    $kilometrage = $data[7];
} else {
    // Si aucune donnée n'a été reçue, renvoyer une erreur ou un message approprié
    echo "Aucune donnée reçue depuis JavaScript.";
}
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
            <link rel="stylesheet" href="css/custom.css">
    <!--google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!--google material icon-->
            <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<!-- formulaire pour ajouter vehicule -->
<form method="POST" >
<div id="modifiervehicule"  class="modal fade" style="width: 82vw;background-color: #fff5;backdrop-filter: blur(7px);box-shadow: 0 0.4rem 0.8rem #0005;border-radius: .8rem;height:75vh;">
  <div >
    <div >
      <form method="POST" style="height:100%;">
        <div class="modal-header">
          <h4 class="modal-title" style="font-size:40px; margin-left: 30px; padding-top: 10px;">Modifier vehicule</h4>
        </div>
        <div class="modal-body" style="display:flex; flex-wrap: wrap; width:100%; margin-left: 100px;margin-top: 40px;">
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Matricule:</b></label>
            <input type="text" class="form-control" name="matriculem" style="margin-left: 10px;" value=<?php echo $matricule  ?> >
          </div>
          <div class="form-group" style="width:50%; margin-top:30px; ">
            <label><b>Marque:</b></label>
            <input type="text" class="form-control" name="marquem" style="margin-left: 38px;" value=<?php echo $marque  ?> >
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Modele:</b></label>
            <input type="text" class="form-control" name="modelem" style="margin-left: 25px;" value=<?php echo $modele  ?> >
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Couleur:</b></label>
            <input type="text" class="form-control" name="couleurm" style="margin-left: 35px;" value=<?php echo $couleur  ?> >
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Nserie:</b></label>
            <input type="text" class="form-control" name="nseriem" style="margin-left: 31px;" value=<?php echo $nserie  ?> >
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Type:</b></label>
            <input type="text" class="form-control" name="typem" style="margin-left: 58px;"  value=<?php echo $type  ?> >
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Carburant:</b></label>
            <input type="text" class="form-control" name="carburantm" value=<?php echo $carburant ?> >
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Kilometrage:</b></label>
            <input type="text" class="form-control" name="kilometragem" value=<?php echo $kilometrage ?> >
          </div>
          <!-- <div class="form-group" style="width:50%; margin-top:30px; margin-left: 300px;">
            <label><b>Etat:</b></label>
            <input type="text" class="form-control" name="etat" value: >
          </div> -->
        </div>
        <div class="modal-footer" style="width:50%; margin-top:70px; margin-left: 400px;">
    
          <input type="button" id="cancel" onclick="listev()" class="btn btn-default" style="height:40px; width:100px;border-radius: 20%; cursor:pointer;" data-dismiss="modal" value="Cancel">
          

          <input type="submit" name="modifierv" style="background-color: #ff8500; border-radius: 20%; cursor:pointer; margin-left: 100px; width:100px; height:40px;" value="OK">
        </div>
      </form>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
   
     
</script>
</body>
</html>