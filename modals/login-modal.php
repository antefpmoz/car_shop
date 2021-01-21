<?php require('./dbfunctions/db_login.php')?>
<?php include('./dbfunctions/errors.php')?>
    <div class="registration-modal">
        <form class="user-form" action="" method="post">
            <span>Korisnicko ime</span></br>
            <input class="user-input" type="text" name="username"></br>
            <span>Sifra</span></br>
            <input class="user-input" type="password" name="password"></br>
            <button type="submit" name="loginUsr" class="registerbtn">PRIJAVA</button></br>
            <div class="regError"> <?php foreach($login_errors as $value){echo $value, "</br>";} ?> </div>
        </form>
    </div>