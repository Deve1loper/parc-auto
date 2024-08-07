<?php 
   require_once(__DIR__ . "/../controller/reservationcont.php");
   require_once(__DIR__ . "/../controller/chefcont.php");

              $data= new reservationcont();
              $reservations= $data->getallreservations();
              $chauffeur=new chefcont();

              
 ?> 
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
    <main  class="table" id="table">
        <section class="table__header">
            <h1>Liste Reservation</h1>

            <div class="input-group">
                <input type="search" placeholder="Rechercher Reservation...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <section class="table__body">
            <table id="myTable">
                <thead>
                    <tr style="background-color: #ff8500;">
                        <th> Num Reservation <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Chauffeur</th>
                        <th>Telephone </th>
                        <th>Employe </th>
                        <th> matricule </th>
                        <th> Date Debut </th>
                        <th> Date Fin </th>
                        <th> destination </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($reservations as $reservation): ?>

                        <tr>
                           <td><?php echo $reservation['numreservation']  ?></td>
                           <?php $driver= $chauffeur->getonedriver($reservation['id_chauff']); ?>
                          <?php foreach ($driver as $d): ?>
                            <td><?php echo $d['nom'] .' '. $d['prenom'] ?></td> 
                            <td><?php echo $d['telephone']  ?></td>
                          <?php endforeach;?>
                           <?php $emp= $chauffeur->getoneemploye($reservation['id_employee']); ?>
                          <?php foreach ($emp as $em): ?>
                            <td><?php echo $em['nom'] .' '. $em['prenom'] ?></td> 
                          <?php endforeach;?>
                           <td><?php echo $reservation['mat_vehicule']  ?></td>
                           <td><?php echo $reservation['date_debut']  ?></td>
                           <td><?php echo $reservation['date_fin']  ?></td>
                           <td><?php echo $reservation['destination']  ?></td>

                        </tr>
                        
                      <?php endforeach;?>


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


// function addv() {
//   fetch('ajoutervehicule.php')
//     .then(response => response.text())
//     .then(data => {
//       document.getElementById('main').innerHTML = data;
//       eval(document.getElementById('main').getElementsByTagName('script')[0].innerHTML);
//     });
// }

//pour supprimer les reservation qui ont la date expiree

var today = new Date().toISOString().split('T')[0]; //obtenir la date d'aujourdhui

    // Sélectionner le tableau et parcourir chaque ligne
    var table = document.getElementById("myTable");
    var rows = table.getElementsByTagName("tr");
    for (var i = rows.length - 1; i >= 0; i--) {
      var row = rows[i];

      // Obtenir la cellule de la date dans la colonne actuelle
      var dateCell = row.getElementsByTagName("td")[6];
      if (dateCell) {
        var date = dateCell.innerText;

        // Vérifier si la date est dépassée et supprimer la ligne
        if (date < today) {
          table.deleteRow(i);
        }
      }
    }
</script>
</html>





<!-- green : <p class="status delivered">Delivered</p>
red: <p class="status cancelled">Cancelled</p>