<?php 
    require('./dbfunctions/db_connection.php');
    require('./dbfunctions/filter_Results.php');
?>

<div class="car-full-view">
    <div class="car-image-view"><img src="./assets/car-images/<?php echo ?>"/></div>
    <div class="car-title-view">
        <button class="car-buy"><img src="assets/shopping-basket.svg"/></button>
        <button class="car-open-description" onclick="ShowDescription(this)">VolksWagen Golf 5</button>
        <div class="car-description-view">
        Lore ipsum Lore ispum Lorore ipsum Lore ipsum Lore ipsum Lore ispum Lorore ipsum Lore ipsum Lore ipsum Lore ispum Lorore ipsum Lore ipsum
        </div>
    </div>
</div>
    