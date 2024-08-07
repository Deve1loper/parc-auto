
<?php 
   require_once(__DIR__ . "/../controller/chefcont.php");
              $data= new chefcont();
              
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
<div id="ajoutervehicule"  class="modal fade" style="width: 82vw;background-color: #fff5;backdrop-filter: blur(7px);box-shadow: 0 0.4rem 0.8rem #0005;border-radius: .8rem;height:75vh;">
  <div >
    <div >
      <form method="POST" style="height:100%;">
        <div class="modal-header">
          <h4 class="modal-title" style="font-size:40px; margin-left: 30px; margin-top:10px;">Ajouter vehicule</h4>
        </div>
        <div class="modal-body" style="display:flex; flex-wrap: wrap; width:100%; margin-left: 100px;margin-top: 40px;">
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Matricule:</b></label>
            <input type="text" class="form-control" name="matricule"style="margin-left: 10px;" required>
          </div>
          <div class="form-group" style="width:50%; margin-top:30px; ">
            <label><b>Marque:</b></label>
            <input type="text" class="form-control" name="marque" style="margin-left: 38px;" required>
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Modele:</b></label>
            <input type="text" class="form-control" name="modele" style="margin-left: 25px;" required>
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Couleur:</b></label>
            <input type="text" class="form-control" name="couleur" style="margin-left: 35px;" required>
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Nserie:</b></label>
            <input type="text" class="form-control" name="nserie" style="margin-left: 31px;" required>
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Type:</b></label>
            <input type="text" class="form-control" name="type" style="margin-left: 58px;"  required>
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Carburant:</b></label>
            <input type="text" class="form-control" name="carburant" required>
          </div>
          <div class="form-group" style="width:50%;margin-top:30px;">
            <label><b>Kilometrage:</b></label>
            <input type="text" class="form-control" name="kilometrage" required>
          </div>
          <!-- <div class="form-group" style="width:50%; margin-top:30px; margin-left: 300px;">
            <label><b>Etat:</b></label>
            <input type="text" class="form-control" name="etat" required>
          </div> -->
        </div>
        <div class="modal-footer" style="width:50%; margin-top:80px; margin-left: 400px;">
    
          <input type="button" id="cancel" onclick="listev()" class="btn btn-default" style="height:40px; width:100px;border-radius: 20%; cursor:pointer;" data-dismiss="modal" value="Cancel">
          

          <input type="submit" name="ajouter" style="background-color: #ff8500; border-radius: 20%; cursor:pointer; margin-left: 100px; width:100px; height:40px;" value="Ajouter">
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