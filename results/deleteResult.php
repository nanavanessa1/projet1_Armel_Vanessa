<?php 
session_start();
require_once('../functions/functions.php');
require_once('../functions/usercrud.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
$i=$_POST['id'];
$productId=userProductExist($i);
$fieldExist=true;

if(isset($_POST)){
    unset($_SESSION['errorDelete']);
    if(empty($_POST['id'] )){

        $url='../pages/deleteProducts.php';
        header('location:'.$url);
    }if($productId['exist']==false) {
    $_SESSION['errorDelete'] =[
        'id' => $productId['message'],
       ];
        
        $url='../pages/deleteProducts.php';
        header('location:'.$url);

    }else{

        $product=getProductById($i);
            if($product){

                $delete=supprimer($i);
                var_dump($delete);
            }

        }

}

    

   

    
    
    
    
    
    
    
    




?>