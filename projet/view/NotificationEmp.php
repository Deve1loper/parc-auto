<?php 
     require_once(__DIR__ . "/../controller/reservationEmpCont.php");


//recuperer toutes  les infos des utilisateurs
             $res= new reservationEmpCont();
             $reservations= $res->recupererReservation();

?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Employe</title>
        <!--bootstrap link-->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
      
</head>
<body>
    <style type="text/css">
        
* {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    min-height: 100vh;
/*    background: url(images/html_table.png) center / cover;*/
    display: flex;
    justify-content: center;
    align-items: center;
}

main.table {
    width: 82vw;
    height: 75vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}
.table .table__header h1{
    font-size: 24px ;
   
    font-weight: bold;


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
    overflow: overlay;
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
.input-group .img{
    margin-left: 12rem;
}
.input-group {
    position: relative;
}

.search-icon {
    position: absolute;
    top: 50%;
    right: 5px;
    transform: translateY(-50%);
    width: 40px;
}
.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    height: 30px;
    width: 30px;
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

    </style>
     <main class="table">
        <section class="table__header">
            <h1>Liste Réservations</h1>
            <div class="input-group">
               <input type="search" placeholder="Rechercher reservation...">
               <img src="images/search.png" alt="" class="search-icon">
            </div>
        </section>
        <section class="table__body">
            <table>
            <thead>
                    <tr style="background-color: #ff8500;">
                        <th> Num Reservation<span class="icon-arrow">&UpArrow;</span> </th>
                        <th>Nom Chauffeur</th>
                        <th>Prenom Chauffeur </th>
                        <th>Telephone </th>
                        <th>Matricule</th>
                        <th>Modele</th>
                        <th>Marque</th>
                        <th>Couleur</th>
                        <th>Date Debut</th>

                    
                        <th>Date fin<span class="icon-arrow">&UpArrow;</span> </th>
                        
                    </tr>
                    </thead>
                    <tbody>
        <?php foreach ($reservations as $reservation) : ?>
        <tr>
            <td><?php echo $reservation['num_reservation']; ?></td>
            <td><?php echo $reservation['nom_chauff']; ?></td>
            <td><?php echo $reservation['prenom_chauff']; ?></td>
            <td><?php echo $reservation['telephone']; ?></td>
            <td><?php echo $reservation['matricule']; ?></td>
            <td><?php echo $reservation['modele']; ?></td>
            <td><?php echo $reservation['marque']; ?></td>
            <td><?php echo $reservation['couleur']; ?></td>
            <td><?php echo $reservation['date_debut']; ?></td>
            <td><?php echo $reservation['date_fin']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
                  
            </table>
        </section>
    </main>
      
</body>
<script type="text/javascript">
    const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

// function searchTable() {
//     table_rows.forEach((row, i) => {
//         let col1_data = row.cells[0].textContent.toLowerCase(), // Colonne 1
//             col9_data = row.cells[8].textContent.toLowerCase(), // Colonne 9
//             search_data = search.value.toLowerCase();

//         row.classList.toggle('hide', (col1_data.indexOf(search_data) < 0 && col9_data.indexOf(search_data) < 0));
//         row.style.setProperty('--delay', i / 25 + 's');
//     })

//     document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
//         visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
//     });
// }
 
 function searchTable() {
    table_rows.forEach((row, i) => {
        let col1_data = row.cells[0].textContent.toLowerCase(), // Colonne 1
            col9_data = row.cells[8].textContent.toLowerCase(), // Colonne 9
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', !(col1_data.startsWith(search_data) || col9_data.startsWith(search_data)));
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
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




</script>
</html>





<!-- green : <p class="status delivered">Delivered</p>
red: <p class="status cancelled">Cancelled</p>