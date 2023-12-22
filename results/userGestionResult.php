<?php 

require_once('../functions/usercrud.php');
require_once('../functions/functions.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
session_start();

$user=$_POST;
$userName=userNameExist($_POST["user_name"]);

if (isset($_POST)){
    unset($_SESSION['error']);
    $fieldExist=true;
    if(empty($_POST['user_name'] )){

     $url='../pages/gestionUser.php';
        header('location:'.$url);
    }if($userName['exist']==false) {
    
        $_SESSION['error'] =[
           'user_name' => $userName['message'],
           ];
           $url='../pages/gestionUser.php';
           header('location:'.$url);

   }
    else{
        $userUpdate=updateUserByAdmin($_POST);
           
   }
    
    
    
    }



?>




