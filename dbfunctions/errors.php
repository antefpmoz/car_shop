<?php

    $login_errors = array();
    $registration_errors = array();
    $car_add_errors = array();
    $car_add_message=array();
    $car_remove_errors = array();
    $car_remove_message=array();

    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyFields"){
            array_push($login_errors, "Popunite sva polja");
        }
        if($_GET['error']=="usernameNotCorrect"){
            array_push($login_errors, "Korisničko ime ne postoji");
        }
        if($_GET['error']=="passwordNotCorrect"){
            array_push($login_errors, "Sifra nije tocna");
        }
        if($_GET['error']=="userNotExist"){
            array_push($login_errors, "Korisnik ne postoji");
        }
        if($_GET['error']=="carEmptyFields"){
            array_push($car_add_errors, "Molimo popunite sva polja!");
        }
        if($_GET['error']=="notSupportedFile"){
            array_push($car_add_errors, "Format slike nije podržan!");
        }
        if($_GET['error']=="imgNotUploadedCorrectly"){
            array_push($car_add_errors, "Greška - prilikom učitavanja slike!");
        }
        if($_GET['error']=="emptyRemoveCarError"){
            array_push($car_remove_errors, "Molimo unesite serijski broj vozila!");
        }
        if($_GET['error']=="idCarNotCorrect"){
            array_push($car_remove_errors, "Serijski broj vozila nije točan!");
        }
    }
    if(isset($_GET['success'])){
        if($_GET['success']=='carAddedSuccessfully'){
            array_push($car_add_message, "Uspiješno ste unijeli vozilo!");
        }
        if($_GET['success']=='carSuccessfullyRemoved'){
            array_push($car_remove_message, "Uspiješno ste uklonili vozilo!");
        }
    }
?>