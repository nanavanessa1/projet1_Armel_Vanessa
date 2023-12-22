<?php
// require_once('../templates/footer.php');

session_start()


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>E-Commerce</title>
</head>
<body>       
    


<div  class="wrapper" >
    <form action="../results/loginResult.php" method="post"> 
    <h1> login </h1>

    <div class="input-box">
    
    <input type="text" name="user_name" id="user_name" placeholder="Username " value=""> 
    <i class='bx bxs-user'></i>
    <p style="color: red; font-size: 0.8rem;"><?php echo  isset($_SESSION['errorLogin']['user_name']) ? $_SESSION['errorLogin']['user_name'] : ''?> </p>
    </div>
    <div class="input-box">
    
    <input type="password" name="pwd" id="pwd" placeholder="Password" value=""> 
    <i class='bx bxs-lock-alt'></i>
    <p style="color: red; font-size: 0.8rem;"><?php echo  isset($_SESSION['errorLogin']['pwd']) ? $_SESSION['errorLogin']['pwd'] : ''?> </p>                
    </div>
    <div class="remember-forgot">
        <label> <input type="checkbox"/> Remember me </label>
        <a href="#"> Forgot password</a>
    
    <a href="../pages/accuiel.php"><button class="btnLogin-popup">login</button></a> 

    </div>
    <div class="register-link">
        <p>Don't have an account ?<a href="./signUp.php">register</a></p>

    </div>
    </form>
</div>
</body>
</html>
