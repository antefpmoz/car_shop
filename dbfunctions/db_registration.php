<?php

    require('db_connection.php');
    require('errors.php');
    $succes_msg="";

    if(isset($_POST['regUsr'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordRepeat = $_POST['passwordRepeat'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if(empty($username)){
            array_push($registration_errors, "Unesite korisnicko ime!");
        }
    
        if(empty($password)){
            array_push($registration_errors, "Unesite lozinku!");
        }
    
        if(empty($passwordRepeat)){
            array_push($registration_errors, "Potvrdite lozinku!");
        }
    
        if($password !== $passwordRepeat){
            array_push($registration_errors, "Lozinke se ne podudaraju!");
        }
    
        if(empty($email)){
            array_push($registration_errors,"Unesite email!");
        }
    
        if(empty($phone)){
            array_push($registration_errors, "Unesite telefon!");
        }
    
        if(empty($registration_errors)){
            $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);
            
            if($user){
                if($user['username'] === $username){
                    array_push($registration_errors, "Korisnik već postoji!");
                }
                if($user['email'] === $email){
                    array_push($registration_errors, "Email je zauzet!");
                }
            }else{
                $succes_msg = "Uspijesno ste se registrirali!";
                $enc_pass = md5($password);
                $query = "INSERT INTO users(username, password, email, phone, user_type) VALUES ('$username', '$enc_pass', '$email', '$phone', 2);";
        
                mysqli_query($connect, $query);
            }

        }
    }
?>