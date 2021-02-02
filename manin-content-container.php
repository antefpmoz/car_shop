<?php
require('dbfunctions/db_connection.php');
require('dbfunctions/errors.php');
?>
<div id="main-container-left">
    <form name="filterCars" method="post">
            <!-- Filteri za auto pretragu -->
            <div class="car-filter-menu">
                <div onclick="ToggleFunc(this)" class="collapsible">Marka vozila</div>
                <div class="filter-content">
                    <select name="carsModels" class="carDropdowns" id="carsModel">
                            <?php
                                $query = "SELECT * FROM car_name;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option>$row[name]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Tip vozila</div>
                <div class="filter-content">
                    <select name="carsTypes" class="carDropdowns" id="carsType">
                            <?php
                                $query = "SELECT * FROM car_model;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option>$row[model]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Godište</div>
                <div class="filter-content">
                    <div id="carYear" class="filterForm">
                        <label>OD</label>
                        <input name="year_from" type="number" id="godinaOd" class="inputField"><br>
                        <label>DO</label>
                        <input name="year_to" type="number" id="godinaDo" class="inputField">
                    </div>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Cijena</div>
                <div class="filter-content">
                    <div id="carPrice" class="filterForm">
                        <label>OD</label>
                        <input name="price_from" type="number" id="cijenaOd" class="inputField"><br>
                        <label>DO</label>
                        <input name="price_to" type="number" id="cijenaDo" class="inputField">
                    </div>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Vrijednost vozila</div>
                <div class="filter-content">
                    <select name="carsValue" class="carDropdowns" id="carValue">
                        <?php
                            $query = "SELECT * FROM car_value;";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<option>$row[value]</option>";
                            }
                        ?>
                </select>
            </div>
            </div>
            <button onclick="" name="searchCars" class="searchCars" type="submit">Pretraga</button>
    </form>
</div>
 <!--Ovo je content container-->
    <div id="main-container-right">
    <?php

    if(isset($_POST['searchCars']))
    {
        $filteredCars = array();
        
        $carsTypes = $_POST['carsTypes'];
        $carsModels = $_POST['carsModels'];
        $year_from = $_POST['year_from'];
        $year_to = $_POST['year_to'];
        $price_from = $_POST['price_from'];
        $price_to = $_POST['price_to'];
        $carsValue = $_POST['carsValue'];

        if(empty($year_from)){$year_from = 1900;}else{$year_from=$_POST['year_from'];}
        if(empty($year_to)){$year_to = date('Y');}else{$year_to=$_POST['year_to'];}
        if(empty($price_from)){$price_from = 0;}else{$price_from=$_POST['price_from'];}
        if(empty($price_to)){$price_to = 9999999;}else{$price_to=$_POST['price_to'];}

        $query = "SELECT * FROM cars WHERE
        model = '$carsModels' AND
        type = '$carsTypes' AND
        year BETWEEN $year_from AND $year_to AND
        price BETWEEN $price_from AND $price_to AND
        value = '$carsValue'";

        $result = mysqli_query($connect, $query);
        $json_array = array();

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {?>


            <div class="car-full-view">
                <div class="car-image-view"><img src="./assets/car-images/<?php echo $row['img']?>"/></div>
                <div class="car-title-view">
                    <button class="car-open-description" onclick="ShowDescription(this)"><?php echo $row['model']?></button>
                    <div class="car-description-view">
                        <p><span class="bold">Stanje: </span><?php echo $row['value']?></p>
                        <p><span class="bold">Godina proizvodnje: </span><?php echo $row['year']?></p>
                        <p><span class="bold">Cijena: </span><?php echo $row['price']?> <span class="bold"> KM</span></p>
                        <p><span class="bold">Opis: </span><?php echo $row['description']?></p></br>
                        <p><span class="bold">Serijski broj vozila: </span><?php echo $row['id']?></p>
                    </div>
                </div>
            </div>

            <?php
            }
        }
    }

    if(!isset($_POST['searchCars']) && !isset($_GET['success']))
    {
        $filteredCars = array();

        $query = "SELECT * FROM cars";

        $result = mysqli_query($connect, $query);
        $json_array = array();

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {?>


            <div class="car-full-view">
                <div class="car-image-view"><img src="./assets/car-images/<?php echo $row['img']?>"/></div>
                <div class="car-title-view">
                    <button class="car-open-description" onclick="ShowDescription(this)"><?php echo $row['model']?></button>
                    <div class="car-description-view">
                        <p><span class="bold">Stanje: </span><?php echo $row['value']?></p>
                        <p><span class="bold">Godina proizvodnje: </span><?php echo $row['year']?></p>
                        <p><span class="bold">Cijena: </span><?php echo $row['price']?> <span class="bold"> KM</span></p>
                        <p><span class="bold">Opis: </span><?php echo $row['description']?></p></br>
                        <p><span class="bold">Serijski broj vozila: </span><?php echo $row['id']?></p>
                    </div>
                </div>
            </div>

            <?php
            }
        }
    }
    ?>
    </div>