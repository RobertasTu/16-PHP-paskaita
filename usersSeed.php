<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotojų generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti 200 vartotojų</button>
    </form>
    <?php 

    require_once("connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<200; $i++) {

            $vardas = "vardas".$i;
            $pavarde = "pavarde".$i;
            $slapyvardis = 'slapyvardis'.$i;
            $teises_id = rand(2,4);
            $slaptazodis = 'slaptazodis'.$i;
            $registracijos_data = date('Y-m-d');
            $paskutinis_prisijungimas = $registracijos_data;
            $registracija = 0;

            $sql = "INSERT INTO `vartotojai`(`vardas`, `pavarde`, `slapyvardis`, `teises_id`, `slaptazodis`, `registracijos_data`, `paskutinis_prisijungimas`, `Registracija`) 
            VALUES ('$vardas','$pavarde','$slapyvardis', $teises_id, '$slaptazodis', '$registracijos_data', '$paskutinis_prisijungimas', $registracija )";

            if(mysqli_query($conn, $sql)) {
                echo "Vartotojas sukurtas sekmingai";
                echo "<br>";
            } else {
                echo "Kazkas ivyko negerai";
                echo "<br>";
            }
        }
    }

?>
</body>
</html>