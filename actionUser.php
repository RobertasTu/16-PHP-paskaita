<?php require_once('connection.php'); ?>

<?php 
      
      $sql = "SELECT vartotojai.ID, vartotojai.vardas, vartotojai.pavarde, vartotojai.slapyvardis, vartotojai_teises.pavadinimas, vartotojai_teises.aprasymas  
      FROM `vartotojai` 
      LEFT JOIN vartotojai_teises ON vartotojai.teises_id = vartotojai_teises.ID 
      WHERE 1 
      ORDER BY vartotojai.ID DESC";
    
    $result = $conn->query($sql); //uzklausos vykdymas

    echo '<table class="table table-striped"';

    while($vartotojai = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>'.$vartotojai['ID'].'</td>';
            echo '<td>'.$vartotojai['vardas'].'</td>';
            echo '<td>'.$vartotojai['pavarde'].'</td>';
            echo '<td>'.$vartotojai['slapyvardis'].'</td>';
            echo '<td>'.$vartotojai['pavadinimas'].'</td>';
            echo '<td>'.$vartotojai['aprasymas'].'</td>';
            echo '</tr>';
           
    }
    echo '</table>';
    



?>