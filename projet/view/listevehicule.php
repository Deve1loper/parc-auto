<?php 
   require_once(__DIR__ . "/../controller/chefcont.php");

              $data= new chefcont();
              $cars= $data->getallcars();
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
    <main class="table" id="table">
        <section class="table__header">
            <h1>Liste Vehicules<a href="#" onclick="addv()" class="icon" ><ion-icon name="duplicate-outline" style="color: #ff8500; width: 50px;"></ion-icon></a></h1>
            <div class="input-group">
                <input type="search" placeholder="Rechercher Vehicule...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr style="background-color: #ff8500;">
                        <th> Matricule <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Marque </th>
                        <th> Modele </th>
                        <th> Couleur </th>
                        <th> N-Serie </th>
                        <th> Type </th>
                        <th> Carburant </th>
                        <th> Kilometrage </th>
                        
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($cars as $car): ?>

                        <tr>
                           <td><?php echo $car['matricule']  ?></td>
                           <td><?php echo $car['marque']  ?></td>
                           <td><?php echo $car['modele']  ?></td>
                           <td><?php echo $car['couleur']  ?></td>
                           <td><?php echo $car['nserie']  ?></td>
                           <td><?php echo $car['type']  ?></td>
                           <td><?php echo $car['carburant']  ?></td>
                           <td><?php echo $car['kilometrage']  ?></td>
                           
                           <td>
                             <a onclick="modifiervehicule(this)"  href="#" class="edit" data-toggle="modal">
                                <i  style="color:blue;" class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                             </a>
                             <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                                 <i style="color:red;" class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                             </a>
                           </td>
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

// function searchTable() {
//     table_rows.forEach((row, i) => {
//         let table_data = row.textContent.toLowerCase(),
//             search_data = search.value.toLowerCase();

//         row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
//         row.style.setProperty('--delay', i / 25 + 's');
//     })

//     document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
//         visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
//     });
// }
//if i had problem in serchfunction i will replace it by this ,,, start: 
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

//**********************************end of function ***********************************************************


function searchTable() {
    table_rows.forEach((row, i) => {
        let col1_data = row.cells[0].textContent.toLowerCase(), // Colonne 1
            col9_data = row.cells[8].textContent.toLowerCase(), // Colonne 9
            search_data = search.value.toLowerCase();

        let col1_starts_with_search = col1_data.startsWith(search_data);
        let col9_starts_with_search = col9_data.startsWith(search_data);

        row.classList.toggle('hide', !(col1_starts_with_search || col9_starts_with_search));
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


</script>
</html>





<!-- green : <p class="status delivered">Delivered</p>
red: <p class="status cancelled">Cancelled</p>