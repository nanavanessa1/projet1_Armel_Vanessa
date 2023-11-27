<h2>Se Connecter</h2>
<a href ="../">Accueil</a>

<form action="../results/loginResult.php" method="post">
    
    <label for ="user_name"> user name</label>
    <input id="user_name" type="text" name="user_name" value=""></br>
    <label for ="email"> Email</label>
    <input id="email" type="text" name="email" value=""></br>
    <label for ="pwd"> Password</label>
    <input id="pwd" type="text" name="pwd" value=""></br>
    <div class="mb-3">
    <label class="form-label">Not a Member?</label><a href="signUp.php"
    style="color: navy; font-weight:bold; text-decoration:none;">
    Register Now</a>
    </div>
    <div class="d-grid gap-2">
    <button type="submit" name="Login" class="btn btn-primary"> Se connecter</button>