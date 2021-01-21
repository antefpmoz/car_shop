<?php require('dbfunctions/db_connection.php')?>
<div id="main-container-left">
            <!-- Filteri za auto pretragu -->
            <div class="car-filter-menu">
                <button onclick="ToggleFunc(this)" class="collapsible">Vrsta vozila</button>
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
                <button onclick="ToggleFunc(this)" class="collapsible">Marka vozila</button>
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
                <button onclick="ToggleFunc(this)" class="collapsible">Godište vozila</button>
                <div class="filter-content">
                    <form id="carYear" class="filterForm">
                        <label>OD</label>
                        <input type="number" id="godinaOd" class="inputField"><br>
                        <label>DO</label>
                        <input type="number" id="godinaDo" class="inputField">
                    </form>
                </div>
                <button onclick="ToggleFunc(this)" class="collapsible">Cijena vozila</button>
                <div class="filter-content">
                    <form id="carPrice" class="filterForm">
                        <label>OD</label>
                        <input type="number" id="cijenaOd" class="inputField"><br>
                        <label>DO</label>
                        <input type="number" id="cijenaDo" class="inputField">
                    </form>
                </div>
                <button onclick="ToggleFunc(this)" class="collapsible">Vrijednost vozila</button>
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
            <button onclick="" class="searchCars">Pretraga</button>
        </div>