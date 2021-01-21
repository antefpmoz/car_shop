<?php require('dbfunctions/db_connection.php')?>
<div id="main-container-left">
    <form name="filterCars" method="post">
            <!-- Filteri za auto pretragu -->
            <div class="car-filter-menu">
                <div onclick="ToggleFunc(this)" class="collapsible">Vrsta vozila</div>
                <div class="filter-content">
                    <select name="carsTypes" class="carDropdowns" id="carType">
                            <?php
                                $query = "SELECT * FROM car_name;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option $car_name>$row[name]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Marka vozila</div>
                <div class="filter-content">
                    <select name="carsModels" class="carDropdowns" id="carModel">
                            <?php
                                $query = "SELECT * FROM car_model;";
                                $result = mysqli_query($connect,$query);
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option>$row[model]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Godište vozila</div>
                <div class="filter-content">
                    <div id="carYear" class="filterForm">
                        <label>OD</label>
                        <input type="number" id="godinaOd" class="inputField"><br>
                        <label>DO</label>
                        <input type="number" id="godinaDo" class="inputField">
                    </div>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Cijena vozila</div>
                <div class="filter-content">
                    <div id="carPrice" class="filterForm">
                        <label>OD</label>
                        <input type="number" id="cijenaOd" class="inputField"><br>
                        <label>DO</label>
                        <input type="number" id="cijenaDo" class="inputField">
                    </div>
                </div>
                <div onclick="ToggleFunc(this)" class="collapsible">Vrijednost vozila</div>
                <div class="filter-content">
                    <select name="carsValue" class="carDropdowns" id="carValue">
                        <?php
                            $query = "SELECT * FROM car_value;";
                            $result = mysqli_query($connect,$query);
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<option $car_value>$row[value]</option>";
                            }
                        ?>
                </select>
            </div>
            </div>
            <button onclick="" class="searchCars" type="submit">Pretraga</button>
    </form>
</div>