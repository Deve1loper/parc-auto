<?php 
   require_once(__DIR__ . "/../controller/chefcont.php");
   require_once(__DIR__ . "/../controller/usercont.php");
              $data= new chefcont();
              $drivers= $data->getalldriver();
              $cars= $data->getallcars();
              $user=new usercont();
         
// Récupérer les valeurs de l'email et du mot de passe depuis la superglobale $_GET
if (isset($_GET['email']) && isset($_GET['pass'])) {
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $accounts=$user->account($email,$pass);
    $name= $accounts[0]['nom'] .' '. $accounts[0]['prenom'];
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
   <style type="text/css">
   	   @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');

   	   * {
   	   	 margin: 0;
   	   	 padding: 0;
   	   	 box-sizing: border-box;
   	   	 font-family: 'Poppins',sans-serif;

   	   }
   	   body{
   	   	 display: flex;
         flex-direction: column;
   	   	 justify-content: center;
   	   	 align-items: center;
   	   	 min-height: 100vh;
   	   	 background: url(images/html_table.png) center / cover;
         flex-direction: column;


   	   }
       .menubar{
          
/*            margin-left: 65%;*/
            top: 10px;
            width: 100%;
            display: flex;
            flex-direction: row;
            z-index: 9999;
            padding-top: 20px;


       }
   	   .navigation {
   	   	 position: relative;
/*   	   	 width: 400px;*/
        width: 100%;
        max-width: 100vh;
        margin: 0 auto;
   	   	 height: 70px;
   	   	 display: flex;
   	   	 justify-content: center;
   	   	 align-items: center;
   	   	 background: #f0f0f0cc;
   	   	 border-radius: 35px;
         border: 2px solid black;

   	   }
   	   .navigation ul {
   	   	position: relative;
   	   	display: flex;
   	   	
   	   }
   	   .navigation ul li {
   	   	position: relative;
   	   	list-style: none;
   	   	width: 90px; /*hna kan 70*/
   	   	height: 70px;
   	   	z-index: 1;
   	   }
       .navigation ul li a{
       	 position: relative;
       	 display: flex;
       	 justify-content: center;
       	 align-items: center;
       	 flex-direction: column;
       	 width: 100%;
       	 text-align: center;
       	 font-weight: 500;
       }
       .navigation ul li a .icon{
         position: relative;
         display: block;
         font-size: 1.5em;
         line-height: 75px;
         transition: 0.5s;
         color: black;


       }
       .navigation ul li.active a .icon{
       	transform: translateY(-8px);
       	color: #ff8500;

       }
       .navigation ul li a .text{
       	 position: absolute;
       	 opacity: 1;
       	 font-weight: 900;
       	 font-size: 0.56em;
       	 color: black;
       	 transition: 0.5s;
       	 letter-spacing: 0.005em;
       	 text-transform: uppercase;
       	 transform: translateY(0px);
       	 margin-top: 30px; 

       }
      .navigation ul li.active a.text{
      	transform: translateY(13px);
      	opacity: 1;
        font-weight: bolder;
      } 
      .indicator{
      	position: absolute;
      	width: 70px;
      	height: 70px;
      	display: flex;
      	justify-content: center;
        align-items: center;
        transition: 0.5s;

      }
      .indicator::before{
      	content: '';
      	position: absolute;
      	bottom: 13px;
      	width: 100%;
      	height: 14px;
        margin-left: 20px;
      	background: #ff8500;
      	border-radius: 10px;

      }
      .indicator::after{
/*          content: '';*/
          position: absolute;
          top: -3px;
          width: 7.5px;
          height: 7.5px;
          border-radius: 50%;
/*          background: #333;*/
          box-shadow: 0 0 0 2px #ff8500, 50px 50px #ff8500, 40px 0 #ff8500, 0 40px #ff8500;
/*          transform: rotate(45deg);*/
          animation: animate 2s ease-in-out infinite;

      }
      @keyframes animate {
      	0%,100% {
      		transform: rotate(35deg);
      	}
      	50% {
      		transform: rotate(55deg);
      	}
      }
      .navigation ul li:nth-child(2).active ~ .indicator {
      	transform: translateX(calc(90px * 1));
      }
      .navigation ul li:nth-child(3).active ~ .indicator {
      	transform: translateX(calc(90px * 2));
      }
      .navigation ul li:nth-child(4).active ~ .indicator {
      	transform: translateX(calc(90px * 3));
      }
     /* .navigation ul li:nth-child(5).active ~ .indicator {
        transform: translateX(calc(90px * 4));
      }*/
      
     #main{
      margin-top: 40px;
     
     }
     .image{
         width: 70px;
         height: 70px;
         border-radius: 50px;
         border: 1px solid black;

     }@media (max-width: 600px) {
  .navigation {
    flex-direction: column;
    height: auto;
  }

  .navigation ul {
    flex-direction: row;
    justify-content: center;
  }

  .navigation ul li {
    width: auto;
    margin: 5px;
  }

  .navigation ul li a .icon {
    line-height: normal;
  }

  .navigation ul li a .text {
    display: none;
  }
}  #list .sub-menu{display: none;}
   #list:hover .sub-menu{ 
    display:flex;
    background-color: #f0f0f0cc;
    height: 30px;
    margin-top: -6px;
    border-radius: 0 0 5px 5px;
    border-left: 2px solid black;
    border-right: 2px solid black;
    border-bottom: 2px solid black;

     }  
   </style>
     <header class="menubar">
      <!-- logo sonatrach -->
      <div style="padding-left: 25px;">
        <img src="images/logo.jpg" class="image">
      </div>
     <!-- debut menu -->
     <div class="navigation">
     	<ul>
     		<li class="list active">
     			<a href="#" onclick=listedemandes()>
     				<span class="icon"><ion-icon name="document-outline"></ion-icon></span>
     				<span class="text">Notification</span>
     			</a>
     		</li>
     		<li class="list">
     			<a href="#" onclick=listev()>
     				<span class="icon"><ion-icon name="car-sport-outline"></ion-icon></span>
     				<span class="text">Vehicules</span>
     			</a>
     		</li>
     		<li class="list">
     			<a id="v" href="#" onclick=lister()>
     				<span class="icon"><ion-icon name="people-outline"></ion-icon></span>
     				<span class="text">Reservation</span>
     			</a>
     		</li>
     		<li class="list">
     			<a href="#" href="#" onclick=listec()>
     				<span class="icon"><ion-icon name="notifications-circle-outline"></ion-icon></span>
     				<span class="text">Chauffeur</span>
     			</a>
     		</li>
        <li id="list" class="list">
          <a href="#">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
             <span class="text"><?php echo $name ; ?></span>
          </a>
          <p class="sub-menu" ><span class="icon"><ion-icon name="log-out-outline" style="height: 30px;"></ion-icon></span><a style="color:black;" href="#" onclick=logout()>log out</a></p>
        </li>
     		<div class="indicator"></div>
     	</ul>
     </header>
   <!-- fin menu bar -->
  </div>
  <body id="b" onload="listedemandes()">
    <!-- le main de la page -->
  <div id="main">
    
  </div>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   <script type="text/javascript">
   	  let list= document.querySelectorAll('.list');
   	  function activeLink(){
   	  	list.forEach((item)=>
   	  		item.classList.remove('active'));
   	  	this.classList.add('active');
   	  }
   	  list.forEach((item)=>
   	  	item.addEventListener('click',activeLink))

      //fonction pour bouton gérer les véhicules 
 function listev() {
  fetch('listevehicule.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main').innerHTML = data;
      eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
    });
}
  //fonction pour boutton consulter chauffeurs
 // function listec() {
 //    fetch('listechauffeur.php')
 //      .then(response => response.text())
 //      .then(data => {
 //        document.getElementById('main').innerHTML = data;
 //      });
 //  }


function listec() {
  fetch('listechauffeur.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main').innerHTML = data;
      eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
    });
}

//logout
function logout() {
  window.location.href = "login/index.php";
}

function addv() {
  fetch('ajoutervehicule.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main').innerHTML = data;
      eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
    });
}
// lorsque le chef click sur reservation, la liste des reservation affiché dans le contenue main
function lister() {
  fetch('listereservation.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main').innerHTML = data;
      eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
    });
}

//quand le chef click sur notification
function listedemandes() {
  fetch('notificationview.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main').innerHTML = data;
      eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
    });
}


//si le chef clique sur accepter pour accepter la demande en attente
// function accepter(element) {
//   fetch('accepterdemande.php')
//     .then(response => response.text())
//     .then(data => {
//       document.getElementById('main').innerHTML = data;
//       eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
//     });


// }





function accepter(element) {
  let row = element.closest('tr'); // Récupérer la ligne parente du bouton cliqué
  let rowData = []; // Tableau pour stocker les données de la ligne

  // Parcourir les cellules de la ligne et ajouter les données à rowData
  for (let i = 0; i < row.cells.length; i++) {
    rowData.push(row.cells[i].textContent);
  }

  fetch('accepterdemande.php', {
      method: 'POST',
      body: JSON.stringify(rowData), // Envoyer les données au script PHP
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.text())
    .then(data => {
      // Mettre à jour le contenu de la balise <main> avec la réponse reçue
      document.querySelector('main').innerHTML = data;
    })
    .catch(error => {
      console.error('Une erreur s\'est produite lors de la récupération des données:', error);
    });
}

//fonction pour recuperer les champs pour modifier vehicule 
function modifiervehicule(element) {
  let row = element.closest('tr'); // Récupérer la ligne parente du bouton cliqué
  let rowData = []; // Tableau pour stocker les données de la ligne

  // Parcourir les cellules de la ligne et ajouter les données à rowData
  for (let i = 0; i < row.cells.length; i++) {
    rowData.push(row.cells[i].textContent);
  }
  fetch('modifiervehicule.php', {
      method: 'POST',
      body: JSON.stringify(rowData), // Envoyer les données au script PHP
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.text())
    .then(data => {
      // Mettre à jour le contenu de la balise <main> avec la réponse reçue
      document.querySelector('main').innerHTML = data;
    })
    .catch(error => {
      console.error('Une erreur s\'est produite lors de la récupération des données:', error);
    });
}
   //refuser demande
  function refuser(element) {
  let row = element.closest('tr'); // Récupérer la ligne parente du bouton cliqué
  let rowData = []; // Tableau pour stocker les données de la ligne

  // Parcourir les cellules de la ligne et ajouter les données à rowData
  for (let i = 0; i < row.cells.length; i++) {
    rowData.push(row.cells[i].textContent);
  }


  fetch('refuserdemande.php', {
      method: 'POST',
      body: JSON.stringify(rowData), // Envoyer les données au script PHP
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.text())
    .then(data => {
      // Mettre à jour le contenu de la balise <main> avec la réponse reçue
      document.querySelector('main').innerHTML = data;
    })
    .catch(error => {
      console.error('Une erreur s\'est produite lors de la récupération des données:', error);
    });
}


   </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<?php

//fonction pour ajouter vehicule
if (isset($_POST['ajouter'])) {
    $matricule = $_POST['matricule'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $couleur = $_POST['couleur'];
    $nserie = $_POST['nserie'];
    $type = $_POST['type'];
    $carburant = $_POST['carburant'];
    $kilometrage = $_POST['kilometrage'];
    $ajouter = $data->ajoutervehicule($matricule, $marque, $modele, $couleur, $nserie, $type, $carburant, $kilometrage);

}

//fonction pour modifier vehicule 
if (isset($_POST['modifierv'])) {
    $matricule = $_POST['matriculem'];
    $marque = $_POST['marquem'];
    $modele = $_POST['modelem'];
    $couleur = $_POST['couleurm'];
    $nserie = $_POST['nseriem'];
    $type = $_POST['typem'];
    $carburant = $_POST['carburantm'];
    $kilometrage = $_POST['kilometragem'];
    $modifier = $data->modifiervehicule($matricule, $marque, $modele, $couleur, $nserie, $type, $carburant, $kilometrage);
}

//fonction pour accepter une demande
if (isset($_POST['acc'])){
  $numd=$_POST['numdemande'];
   $chauffeur = $_POST['chauffeur'];
    $idemploye = $_POST['idemploye'];
    $vehicule = $_POST['vehicule'];
    $dated = $_POST['dated'];
    $datef = $_POST['datef'];
    $destination = $_POST['destination'];
    $data->accepterdemande($chauffeur,$idemploye,$vehicule,$dated,$datef,$destination);
    $data->changeEtatDemande($numd);


}
//refuser demande 
if (isset($_POST['refuser'])){
    $numd=$_POST['numdemande'];
    $data->refuserDemande($numd);
    

}



?>



</body>
</html>
 