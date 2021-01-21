<?php

    require('db_connection.php');
    require('errors.php');

    if(isset($_POST['removeCar'])){

        $carId = $_POST['carId'];

        if(empty($carId)){
            header("Location: ./admin.php?error=emptyRemoveCarError");
            exit();
        }else{
            $query = "SELECT * FROM cars WHERE id='$carId';";
            $result = mysqli_query($connect, $query);
            $car = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result)===1){
                $carId_check = strcmp($carId, $car['id']);
                if($carId_check==0){
                    $remove_query = "DELETE FROM cars WHERE id='$carId';";
                    mysqli_query($connect, $remove_query);
                    header("Location: ./admin.php?success=carSuccessfullyRemoved");
                }
            }else{
                header("Location: ./admin.php?error=idCarNotCorrect");
                exit();
            }
        }
    }

?>