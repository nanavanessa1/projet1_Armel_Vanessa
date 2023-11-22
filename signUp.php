<h2>Enregistrement<h2>
    <a href= "../index.php"> Accueil</a>
    <?php
    session_start();
    ?>
    <form action="../results/signupResult.php" method="post">
    <label for ="user_name"> user name</label>
    <input id="user_name" type="text" name="user_name" value=""></br>
    <label for ="fname"> First name</label>
    <input id="fname" type="text" name="fname" value=""></br>
    <label for ="lname"> Last name</label>
    <input id="lname" type="text" name="lname" value=""></br>
    <label for ="email"> Email</label>
    <input id="email" type="text" name="email" value=""></br>
    <label for ="pwd"> Password</label>
    <input id="pwd" type="text" name="pwd" value=""></br>
    
    <button type="submit" > S'enregistrer</button>
</form>
<div>
</div>