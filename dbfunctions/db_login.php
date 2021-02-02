<?php

    require('db_connection.php');
    require('errors.php');

    if(isset($_POST['loginUsr'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            header("Location: ./login.php?error=emptyFields");
            exit();
        }else{
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username';";
            $result = mysqli_query($connect, $query);
            $user = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result) === 1){
                $passwordCheck = strcmp($password, $user['password']);
                $usernameCheck = strcmp($username, $user['username']);
                $userCheck = $user['user_type'];

                if($passwordCheck!==0){
                    header("Location: ./login.php?error=passwordNotCorrect");
                    exit();
                }
                else if($usernameCheck!==0){
                    header("Location: ./login.php?error=usernameNotCorrect");
                    exit();
                }else if($passwordCheck==0 && $usernameCheck==0 && $userCheck==2){
                    session_start();
                    $_SESSION['userId']=$user['id'];
                    $_SESSION['userUsr']=$user['username'];

                    header("Location: ./index.php?loginIn=succes");
                    exit();
                }else if($passwordCheck==0 && $usernameCheck==0 && $userCheck==1){
                    session_start();
                    $_SESSION['superUserId']=$user['id'];
                    $_SESSION['superUserUsr']=$user['username'];

                    header("Location: ./index.php?loginIn=succes");
                    exit();
                }else if($passwordCheck==0 && $usernameCheck==0 && $userCheck==0){
                    session_start();
                    $_SESSION['adminId']=$user['id'];
                    $_SESSION['adminUsr']=$user['username'];

                    header("Location: ./index.php?loginIn=succes");
                    exit();
                }
                else{
                    header("Location: ./login.php?error=credentialsNotCorrect");
                    exit();
                }

            }else{
                header("Location: ./login.php?error=userNotExist");
                exit();
            }
        }

    }

?>