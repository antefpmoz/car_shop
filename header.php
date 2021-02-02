<!--Ovo je header-->
<?php

    session_start();

?>
<div id="header">
    <div id="logo-container">
    <a href="index.php">
        <span class="logo-txt-1">AUTO</span>
        <span class="logo-txt-2">TRGOVINA</span>
        </a>
    </div>
    <div id="user-container">
        <?php
            if(isset($_SESSION['userId'])){
                echo '<form action="dbfunctions/db_logout.php">
                <button class="user-btn">ODJAVA</button>
            </form>
            <form action="buy.php">
                <button class="user-btn">KUPOVINA</button>
            </form>';
            }else if(isset($_SESSION['adminId']) || isset($_SESSION['superUserId'])){
                echo '<form action="dbfunctions/db_logout.php">
                <button class="user-btn">ODJAVA</button>
            </form>
            <form action="admin.php">
                <button class="user-btn">ADMIN PANEL</button>
            </form>';
            }
            else{
                echo '<form action="registration.php">
                <button class="user-btn">REGISTRACIJA</button>
                </form>
                <form action="login.php">
                    <button class="user-btn">PRIJAVA</button>
                </form>';
            }
        ?>
    </div>
</div>