<?php 
   require_once(__DIR__ . "/../controller/responsablecont.php");
   require_once(__DIR__ . "/../controller/usercont.php");
    require_once(__DIR__ . "/../controller/chefcont.php");
    require_once(__DIR__ . "/../controller/chauffeurcont.php");
              $data= new responsablecont();
              $user=new usercont();
               $chauffeur=new chefcont();
         
// Récupérer les valeurs de l'email et du mot de passe depuis la superglobale $_GET
if (isset($_GET['email']) && isset($_GET['pass'])) {
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $accounts=$user->account($email,$pass);
    $name= $accounts[0]['nom'] .' '. $accounts[0]['prenom'];

    $demande= $data->demandesresponsable($name); 
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
/*iciiiiiiiiiiiiiiiiiiiiiiiiiiiiiii*/
main.table {
    width: 82vw;
    height: 75vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 150%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 1.2rem;
    height: 1.2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;
    overflow: auto;
}

.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #ff8500;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893a3;
    color: #b30021;
}

.status.pending {
    background-color: #ebc474;
}

.status.shipped {
    background-color: #6fcaea;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid blue;
}

thead th:hover {
    color: blue;
    font-size: 19px;
}

thead th.active span.icon-arrow{
    background-color: bleu;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}
thead th.active{
    color: bleu;

}

tbody td.active {
    color: #ff8500;
    font-size: 20px;
    font-weight: bolder;
}
/*iciiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii*/
@media (max-width: 600px) {
  main.table {
    width: 95vw;
    height: auto;
  }

  .table__body {
    max-height: none;
  }

  table {
    font-size: 14px;
  }

  thead th {
    font-size: 16px;
  }

  tbody td {
    font-size: 14px;
  }
}

@media (max-width: 600px) {
  td:not(:first-of-type) {
    min-width: 8rem;
  }
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
     			<a href="#" >
     				<span class="icon"><ion-icon name="document-outline"></ion-icon></span>
     				<span class="text">Notification</span> <!--les reservations-->
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
  <body>
    <!-- le main de la page -->
  <div id="main">
     <main  class="table" id="table">
        <section class="table__header">
            <h1>Liste Demandes</h1>

            <div class="input-group">
                <input type="search" placeholder="Rechercher Reservation...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <section class="table__body">
            <table id="myTable">
                <thead>
                    <tr style="background-color: #ff8500;">
                        <th> Num Demande <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Employe </th>
                        <th> distance </th>
                        <th> Date Debut </th>
                        <th> Date Fin </th>
                        <th> destination </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($demande as $d): ?>

                        <tr>
                           <td><?php echo $d['num_demande']  ?></td>
                           <td><?php echo $d['nom'] . ' ' . $d['prenom']  ?> </td>
                           <td><?php echo $d['distance']  ?></td>
                           <td><?php echo $d['date_debut']  ?></td>
                           <td><?php echo $d['date_fin']  ?></td>
                           <td><?php echo $d['destination']  ?></td>
                           <td>
                            <form method="POST">  
                             <!-- <p onclick="accepter()" class="status delivered" style="width:80px; cursor: pointer;"  >Accepter</p>  -->
                             <p onclick="accepterd(this)" class="btn" style="width:85px;height: 23px; cursor: pointer; background-color: #2d9e2d; border-radius: 5px;color: white; padding-left:5px ; margin-bottom: 5px;">Accepter</p>

                            </form> 

                           </td> 

                        </tr>
                        
                      <?php endforeach;?>


                </tbody>
            </table>
        </section>
    </main>
  

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

//logout
function logout() {
  window.location.href = "login/index.php";
}

// //quand le cchauffeur entre dans son interface 
// function listereservations() {
//   fetch('reservationschauffeur.php')
//     .then(response => response.text())
//     .then(data => {
//       document.getElementById('main').innerHTML = data;
//       eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
//     });
// }

   </script>
<script type="text/javascript">
    const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let col1_data = row.cells[0].textContent.toLowerCase(), // Colonne 1
            search_data = search.value.toLowerCase();

        let col1_starts_with_search = col1_data.startsWith(search_data);

        row.classList.toggle('hide', !(col1_starts_with_search ));
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}
//fonction pour accepter demande 
function accepterd(element) {
  let row = element.closest('tr'); // Récupérer la ligne parente du bouton cliqué
  let rowData = []; // Tableau pour stocker les données de la ligne

  // Parcourir les cellules de la ligne et ajouter les données à rowData
  for (let i = 0; i < row.cells.length; i++) {
    rowData.push(row.cells[i].textContent);
  }

  fetch('responsableaccept.php', {
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










// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

//pour supprimer les reservation qui ont la date expiree

// var today = new Date().toISOString().split('T')[0]; //obtenir la date d'aujourdhui

//     // Sélectionner le tableau et parcourir chaque ligne
//     var table = document.getElementById("myTable");
//     var rows = table.getElementsByTagName("tr");
//     for (var i = rows.length - 1; i >= 0; i--) {
//       var row = rows[i];

//       // Obtenir la cellule de la date dans la colonne actuelle
//       var dateCell = row.getElementsByTagName("td")[4];
//       if (dateCell) {
//         var date = dateCell.innerText;

//         // Vérifier si la date est dépassée et supprimer la ligne
//         if (date < today) {
//           table.deleteRow(i);
//         }
//       }
//     }
</script>
<?php


   if (isset($_POST['acce'])){
    $numd=$_POST['numdemande'];
    $data->changeetat($numd);
     }

 ?>
</body>
</html>
 