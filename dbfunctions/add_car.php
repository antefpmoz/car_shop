<?php

    require('db_connection.php');
    require('errors.php');
    
    $allow_extensions = array("jpg", "jpeg", "png");

    if(isset($_POST['submitCarEnter'])){

        $carname= $_POST['car_name'];
        $carmodel = $_POST['car_model'];
        $caryear = $_POST['car_year'];
        $carprice = $_POST['car_price'];
        $carvalue = $_POST['car_value'];
        $cardescription = $_POST['car_description'];

        $filename = $_FILES['car_image']['name'];
        $filetemp = $_FILES['car_image']['tmp_name'];
        $upload_dir='./assets/car-images/';

        if(empty($caryear) || empty($carprice) || empty($cardescription))
        {
            header("Location: ./admin.php?error=carEmptyFields");
            exit();
        }
        else if(empty($car_add_errors))
        {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $uniqueName = rand(1000, 100000).".".$ext;

            if(in_array($ext, $allow_extensions))
            {
                move_uploaded_file($filetemp, $upload_dir.$uniqueName);
            }
            else
            {
                header("Location: ./admin.php?error=notSupportedFile");
                exit();
            }
            $query = "INSERT INTO cars(model, type, year, price, value, description, img) VALUES('$carname', '$carmodel', '$caryear', '$carprice', '$carvalue', '$cardescription', '$uniqueName')";
            mysqli_query($connect, $query);
            header("Location: ./admin.php?success=carAddedSuccessfully");
        }
        else
        {
            header("Location: ./index.php");
            exit();
        }
    }

?>