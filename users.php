<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <?php require_once("includes.php"); ?>

</head>
<body>
    <div class="container">

        <?php 
        //sukurti mygtuka, kuris iskleistu imoniu pridejimo forma ir ta forma naudodama AJAX pridetu nauja imone
        //bei ja parodytu lenteleje
        ?>


        <div id="alert-space">
            
        </div>

        <button id="user_create">Create New User</button>
        
        <div class="userForm d-none">
            <input  id="vardas" class="form-control" placeholder="Įveskite vardą" />
            <input id="pavarde" class="form-control" placeholder="Įveskite pavarde" />
            <input id="slapyvardis" class="form-control" placeholder="Įveskite slapyvardi" />
            <input id="slaptazodis" class="form-control" placeholder="Įveskite slaptazodi" />
            
            
            <button id="createUser">Add</button>
        </div>

        <div id='output'>
        <table class="table table-striped">
            <?php 
            
            $sql = "SELECT vartotojai.ID, vartotojai.vardas, vartotojai.pavarde, vartotojai.slapyvardis, vartotojai_teises.pavadinimas, vartotojai_teises.aprasymas  
            FROM `vartotojai` 
            LEFT JOIN vartotojai_teises ON vartotojai.teises_id = vartotojai_teises.ID 
            WHERE 1 
            ORDER BY vartotojai.ID DESC";

            $result = $conn->query($sql);

            while($vartotojai = mysqli_fetch_array($result)) {
                echo "<tr>";
                    echo "<td>".$vartotojai["ID"]."</td>";
                    echo "<td>".$vartotojai["vardas"]."</td>";
                    echo "<td>".$vartotojai["pavarde"]."</td>";
                    echo "<td>".$vartotojai["slapyvardis"]."</td>";
                    echo "<td>".$vartotojai["pavadinimas"]."</td>";
                    echo "<td>".$vartotojai["aprasymas"]."</td>";
                echo "</tr>";
            }
            
            ?>

        </table>
    </div>


    <script src="script2.js"></script>
</body>
</html>