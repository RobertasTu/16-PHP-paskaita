<?php require_once("connection.php"); ?>

<?php 

$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$slapyvardis = $_GET["slapyvardis"];// tuscias
$teises_id = 2;
$slaptazodis = $_GET['slaptazodis'];
$registracijos_data = Date('Y-m-d');
$paskutinis_prisijungimas = $registracijos_data;
$Registracija = 0;


// echo $pridejimo_data;
//MEs galime daryt ka norim t.y vykdyti INSERT sql uzklausa

$sql = "INSERT INTO `vartotojai`(`vardas`, `pavarde`, `slapyvardis`, `teises_id`, `slaptazodis`, `registracijos_data`, `paskutinis_prisijungimas`, `Registracija` ) 
VALUES ('$vardas','$pavarde', '$slapyvardis', $teises_id, '$slaptazodis', '$registracijos_data', '$paskutinis_prisijungimas', $Registracija)";
if(mysqli_query($conn, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas".$vardas." ".$pavarde." pridėtas sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kazkas ivyko negerai. Uzklausa nesekminga";
    echo '</div>';    
}

?>