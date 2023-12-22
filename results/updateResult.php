<?php 
session_start();
require_once('../functions/functions.php');
require_once('../functions/validation.php');
require_once('../functions/usercrud.php');
require_once('../utils/connexion.php');
$i=$_POST['id'];
$productId=userProductExist($i);
$fieldExist=true;

if(isset($_POST)){
     if(empty($_POST['id'] )){

        $url='../pages/update_deleteProducts.php';
        header('location:'.$url);
    }if($productId['exist']==false) {

         unset($_SESSION['errorUpdate']);

        $_SESSION['errorUpdate'] =[
            'id' => $productId['message'],
           ];
            
            $url='../pages/update_deleteProducts.php';
            header('location:'.$url);
    
    }else{

        $data=[
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'quantity'=>$_POST['quantity'],
            'price'=>$_POST['price'],
            'img_url'=>$_POST['img_url'],
            'description'=>$_POST['description'],
            "billing_address_id"=> 1, 
            "shipping_address_id"=>1,
            "token"=>'bonjour', 
            "role_id"=>3,

        ];
       $update=updateProduct($data);
    
        $url='../pages/update_deleteProducts.php';
        header('location:'.$url);
    }
    
    
    
}




?> 