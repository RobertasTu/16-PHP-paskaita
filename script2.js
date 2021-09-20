"use strict";

//Kompanijoms

function showUsers() {
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "actionUser.php", true);
    xhttp.send();
}




document.querySelector("#user_create").addEventListener("click", function() {
    //pasirinkti elementa kuri norime slepti/parodyti
    //uzteti funkcija togle, kur mums uzdeda/prideda "d-none" klase
    
    var companyForm = document.querySelector(".userForm");
    companyForm.classList.toggle("d-none");

});

document.querySelector("#createUser").addEventListener("click", function() { 
    var vardas = document.querySelector("#vardas").value;
    var pavarde = document.querySelector("#pavarde").value;
    var slapyvardis = document.querySelector("#slapyvardis").value;
    var slaptazodis = document.querySelector("#slaptazodis").value;
    var aprasymas = 0;
    var teises_id = 2;
    var registracijos_data = Date ('Y-m-d');
    var paskutinis_prisijungimas = registracijos_data;
    var Registracija = 0;

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
    
    xhttp.open("GET", "addUser.php?vardas=" + vardas + "&pavarde=" + pavarde + "&slapyvardis=" + slapyvardis + "&slaptazodis=" + slaptazodis, true);
    xhttp.send();   
    
    showUsers();
});