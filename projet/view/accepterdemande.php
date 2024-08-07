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
    $numdemande = $data[0];
    $idemploye = $data[1];
    $nom=$data[2];
    $destination = $data[3];
    $dated = $data[4];
    $datef = $data[5];
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
   <form method="POST">
   <div id="ajouterreservation"  class="modal fade" style="width: 82vw; background-color: #fff5; backdrop-filter: blur(7px); box-shadow: 0 0.4rem 0.8rem #0005; border-radius: .8rem; height:75vh; overflow:auto ;overflow-x: hidden; border: 3px solid black;justify-content: center;
  align-items: center;">
        
            <div class="modal-header" >
               <h4 class="modal-title" style="font-size: 25px; margin-left: 30px; padding-top:20px; ">Accepter la demande de <?php echo $nom; ?> </h4> 
            </div>
            <div class="modal-body" style=" width: 100%; margin-left: 100px; margin-top: 10px; ">
               
               <div class="form-group" style="background-color: transparent ;" style="width: 50%; margin-top: 10px;">
                  <label><b>ID -</b></label>
                  <input type="text" name="idemploye" style="background-color: transparent ;border: none;" value="<?php echo $idemploye  ?>"/>
               </div>
                <div class="form-group" style="width: 50%; margin-top: 30px;">
                  <label><b>numdemande -</b></label>
                  <input name="numdemande" type="text" style="background-color: transparent ; border: none;" value="<?php echo $numdemande ?>"/>
               </div>
               <div class="form-group" style="width: 50%; margin-top: 30px;">
                  <label><b>destination -</b></label>
                  <input name="destination" type="text" style="background-color: transparent ; border: none;" value="<?php echo $destination ?>"/>
               </div>
               <div class="form-group" style="width: 50%; margin-top: 30px;">
                  <label><b>Date Debut -</b></label>
                  <input name="dated" type="Date" style="background-color: transparent ;border: none;" value="<?php echo $dated ?>"/>
               </div>
               <div class="form-group" style="width: 50%; margin-top: 30px;">
                  <label><b>Date Fin -</b></label>
                  <input name="datef" type="Date" style="background-color: transparent ; border: none;" value="<?php echo $datef ?>"/>
               </div>
               <!-- affecter chauffeur  -->
                <div class="form-group" style="width: 50%; margin-top: 30px;">
                  <label><b>Affecter chauffeur -</b></label>
                  <select name="chauffeur" style="background-color: transparent; border: none;">

                     <?php foreach ($drivers as $chauffeur): ?>
                       <option  value="<?= $chauffeur['id']  ?>">
                            <?= $chauffeur['id']  ?>
                        </option> 
                        
                     <?php endforeach; ?>
                  </select>
               </div>
               <!-- affecter vehicule -->
                 <div class="form-group" style="width: 50%; margin-top: 30px;">
                  <label><b>Affecter vehicule -</b></label>

                  <select   name="vehicule" style="background-color: transparent; border: none;">

                     <?php foreach ($cars as $vehicule): ?>
                       <option value="<?= $vehicule['matricule']; ?>">
                          <?= $vehicule['matricule']; ?>
                        </option> 

                     <?php endforeach; ?>
                  </select>
               </div>
               <div style="padding-top: 40px;">

                  <button name="acc" style="background-color: green;font-size: 15px; width: 150px; height: 25px; cursor: pointer;">Accepter</button>
                  <button style="background-color: red; width: 150px; height: 25px; cursor:pointer;">Annuler</button>
               


               </div>
             </div>
             </div>
             </form>  
         
   <script type="text/javascript">

   </script>
</body>
</html>
