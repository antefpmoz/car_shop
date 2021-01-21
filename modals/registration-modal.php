<?php include('./dbfunctions/errors.php')?>
<?php include('./dbfunctions/db_registration.php')?>
<div class="registration-modal">
    <div class="successMsg"><?php echo $succes_msg?></div>
    <form name="regForm" class="user-form" action="" method="post" autocomplete="off">
        <span>Korisnicko ime</span></br>
        <input class="user-input" type="text" name="username"></br>
        <span>Sifra</span></br>
        <input class="user-input" type="password" name="password"></br>
        <span>Ponovite sifru</span></br>
        <input class="user-input" type="password" name="passwordRepeat"></br>
        <span>Email</span></br>
        <input class="user-input" type="text" name="email"></br>
        <span>Telefon</span></br>
        <input class="user-input" type="text" name="phone"></br>
        <button id="regBtn" type="submit" name="regUsr" class="registerbtn">REGISTRACIJA</button></br>
        <div class="regError"> <?php foreach($registration_errors as $value){echo $value, "</br>";} ?> </div>
    </form>
    </div>