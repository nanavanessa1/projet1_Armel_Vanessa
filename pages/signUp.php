<?php
session_start();
var_dump($_SESSION);
$user_name = '';
if (isset($_SESSION['signup_form']['user_name'])) {
    $user_name = $_SESSION['signup_form']['user_name'];
}
$fname = '';
if (isset($_SESSION['signup_form']['fname'])) {
    $user_name = $_SESSION['signup_form']['fname'];
}
$lname = '';
if (isset($_SESSION['signup_form']['lname'])) {
    $user_name = $_SESSION['signup_form']['lname'];
}
$email = '';
if (isset($_SESSION['signup_form']['email'])) {
    $email = $_SESSION['signup_form']['email'];
}
$pwd = '';
if (isset($_SESSION['signup_form']['pwd'])) {
    $pwd = $_SESSION['signup_form']['pwd'];
}
?>
<h2>Enregistrement<h2>
    <a href= "../"> Accueil</a>
<div>
    <form action="../results/signupResult.php" method="post"> 
    <label for ="user_name"> user name</label>
    <input id="user_name" type="text" name="user_name" value="">
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['user_name'])? $_SESSION['signup_errors']['user_name'] : '' ?></p>
</div>
<div>
<label for ="fname"> First name</label>
    <input id="fname" type="text" name="fname" value="">
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['first_name'])? $_SESSION['signup_errors']['first_name'] : '' ?></p>
</div>
<div>
    <label for ="lname"> Last name</label>
    <input id="lname" type="text" name="lname" value="">
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['lname'])? $_SESSION['signup_errors']['lname'] : '' ?></p>
</div>
<div>
    <label for ="email"> Email</label>
    <input id="email" type="text" name="email" value="">
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['user_name'])? $_SESSION['signup_errors']['email'] : '' ?></p>
</div>
<div>
    <label for ="pwd"> Password</label>
    <input id="pwd" type="text" name="pwd" value="">
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['signup_errors']['user_name'])? $_SESSION['signup_errors']['pwd'] : '' ?></p>
</div>
    
    <button type="submit" > S'enregistrer</button>
</form>
<div>
</div>