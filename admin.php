<?php require('dbfunctions/add_car.php')?>
<?php require('dbfunctions/remove_car.php')?>
<?php require('dbfunctions/errors.php')?>
<!DOCTYPE html>
<html>
<head>
    <?php require('heading.php')?>
</head>
<body>
    <?php include('header.php')?>
    <div class="admin-content">
        <div class="manage-car">
            <div class="manage-car-title">Dodaj vozilo</div>
            <div class="manage-car-sides">
            <div class="successMsg"><?php foreach($car_add_message as $value){echo $value, "</br>";} ?> </div>
                <form name="addCarForm" class="add-car-admin" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <!-- MARKA VOZILA -->
                    <p>Marka vozila</p>
                        <select name="car_name" class="user-input">
                            <?php
                                $query = "SELECT * FROM car_name;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option $car_name>$row[name]</option>";
                                }
                            ?>
                        </select>

                    <!-- MODEL VOZILA -->
                        <p>Model vozila</p>
                        <select name="car_model" class="user-input">
                            <?php
                                $query = "SELECT * FROM car_model;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option>$row[model]</option>";
                                }
                            ?>
                        </select>

                    <!-- GODIŠTE VOZILA -->
                        <p>Godište vozila</p>
                        <input class="user-input" type="number" name="car_year"></br>

                    <!-- CIJENA VOZILA -->
                        <p>Cijena vozila</p>
                        <input class="user-input" type="number" name="car_price"></br>

                    <!-- VRIJEDNOST VOZILA -->
                        <p>Vrijednost vozila</p>
                        <select name="car_value" class="user-input">
                            <?php
                                $query = "SELECT * FROM car_value;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option $car_value>$row[value]</option>";
                                }
                            ?>
                        </select>

                    <!-- SLIKA VOZILA -->
                        <p>Slika vozila</p>
                        <input class="user-input-insert" type="file" name="car_image"></br>

                    <!-- OPIS VOZILA -->
                        <p>Opis vozila</p>
                        <textarea name="car_description" class="user-input"></textarea>
                        <button name="submitCarEnter" type="submit" class="registerbtn">POTVRDI</button>
                </form>
                <div class="regError"><?php foreach($car_add_errors as $value){echo $value, "</br>";}?></div>
            </div>
        </div>
        <div class="manage-car">
            <div class="manage-car-title">Ukloni vozilo</div>
            <div class="manage-car-sides">
            <div class="successMsg"><?php foreach($car_remove_message as $value){echo $value, "</br>";} ?> </div>
                <!-- Ovdje je forma za uklanjanje automobila -->
                <form name="removeCar" class="add-car-admin" action="" method="post" autocomplete="off">
                    <p>Serijski broj vozila</p>
                    <input class="user-input" type="number" name="carId"></br>
                    <button name="removeCar" type="submit" class="registerbtn">POTVRDI</button>
                </form>
                <div class="regError"><?php foreach($car_remove_errors as $value){echo $value, "</br>";}?></div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
</body>
</html>