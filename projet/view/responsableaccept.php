<?php 
   require_once(__DIR__ . "/../controller/notificationcont.php");
      $data = new notificationcont();
      $drivers= $data->getalldriver();  
      $cars= $data->getallcars();
  
?>
<?php
// Récupérer les données envoyées depuis JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Vérifier si les données ont été correctement reçues
if (!empty($data)) {
    // Accéder aux valeurs des données
   
    $num = $data[0]; //num demande
    $nom=$data[1]; //nom et prenom employe
    
} else {
    // Si aucune donnée n'a été reçue, renvoyer une erreur ou un message approprié
    echo "Aucune donnée reçue depuis JavaScript.";
}
?>
<style type="text/css">
   


</style>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
  <div>
   <form method="POST">
   <div id="ajouterreservation" style="margin-top: 200px; margin-left: 350px;"  class="modal fade" style=" ">
       <input type="text" name="numdemande" style="display:none;" value="<?php echo $num ?>" /> 
       <p style="font-weight: bolder;"> Accepter La Demande De  <?php echo $nom; ?> </p>
       <button name="acce" style="margin-top: 100px; background-color: green;font-size: 15px; width: 150px; height: 25px; cursor: pointer;">OK</button>
       <button style="background-color:red;font-size: 15px; width: 150px; height: 25px; cursor: pointer;">Annuler</button>
   </div>
 </form>
</div>
</body>