<a href="../">Accueil</a>
<?php
require_once('../functions/functions.php');
require_once('../functions/usercrud.php');
require_once('../functions/validation.php');
require_once('../utils/connexion.php');
//require_once('../templates/footer.php');
session_start();






$userName=userNameIsValid($_POST["user_name"]);
$name=NameIsValid($_POST["name"]);
$f_name= f_NameIsValid($_POST["first_name"]);
$email=EmailIsValid($_POST["email"]);
$pwd=pwdIsValid($_POST["pwd"]);
/*  var_dump($userName);
 var_dump($name);
 var_dump($f_name);
 var_dump($email);
 var_dump($pwd); */




//var_dump($userName);

if(isset($_POST))
{
    $_SESSION['form_signup']=$_POST;

    unset($_SESSION['errors']);
    $fieldValidation=true;

    if (empty($_POST["user_name"] and $_POST["name"] and $_POST["first_name"] and $_POST["email"] and $_POST["pwd"]))
    {
        $url='../pages/signUp.php';
        header('location:'.$url);
    }
    if($userName["is valid"]== false)
    {
        $fieldValidation= false;
    }if($name["is valid"]== false)
    {
        $fieldValidation= false;
        
        
    }if($f_name["is valid"]==false)
    {
        $fieldValidation= false;
        

    }if($email["is valid"]==false)
    {
        $fieldValidation= false;
        
    }
    if($pwd["is valid"]==false)
    {
        
        $fieldValidation= false;
        
        
    }if($fieldValidation==true )
    {

        var_dump("ma validation est ok");
        $encodePwd=encodePwd($_POST["pwd"]);

        $data=[
            
            "user_name"=>$_POST["user_name"],
            "email"=>$_POST["email"],
            "pwd"=> $encodePwd,
            "fname"=>$_POST["first_name"],
            "lname"=>$_POST["name"],
            "billing_address_id"=> 1, 
           "shipping_address_id"=>1,
           "token"=>'bonjour', 
           "role_id"=>3,
        ];

        $newUser=createUser($data);
var_dump('j ai bien cree mon user : ');
        var_dump($newUser);
        
    } 
   
    else
    {

        var_dump("La validation n'est pas valide");

        $_SESSION['errors'] =[
            'user_name' => $userName["message"],
            'name'=> $name["message"] ,
            'lname'=>  $f_name["message"] ,
            'email' => $email["message"],
            'pwd' => $pwd["message"]
        ];
        var_dump($_SESSION['errors'] );
        $url='../pages/signUp.php';
        header('location:'.$url);
    };

} 
else
{
$url='../pages/signUp.php';
header('location:'.$url);
}

?>
<a href="../pages/signUp.php">GO BACKWARD </a>