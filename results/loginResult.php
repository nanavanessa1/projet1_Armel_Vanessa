<a href="../">Accueil</a>
<h2>Login result</h2>
<?php

// require_once '../functions/userCrud.php';
// require_once '../functions/functions.php';
// require_once '../utils/connexion.php';

// var_dump($_POST);

// //Authentification

// if (isset($_POST)) {

//     //vérifier si username dans DB
//     if (!empty($_POST['user_name'])) {
//         $userData = getUserByUsername($_POST['user_name']);
//     } else {
//         //Erreur rien entré
//         //redirect vers login
//         $url = '../pages/login.php';
//         header('Location: ' . $url);
//     }

    
//     //si l'utilisateur exist dans la DB
//     if ($userData) {
//         // comparer pwd avec DB (version encodée)
//         $enteredPwdEncoded = encodePwd($_POST['pwd']);
//         if ($userData['pwd'] == $enteredPwdEncoded) {
//             //traitement si mdp correct
//             //créeer un token
//             $token = hash('sha256', random_bytes(32));
//             echo '</br></br>Mon token : </br>';
            
//             var_dump($token);
//             //enregistrer le token en Session et dans la DB

//             echo "C'est le bon mdp ";
//         }else {
//             //traitement si mdp incorrect
//             //compter lenombre d'erreur et bloquer l'IP apres 3 erreur
//             //Les erreurs peuvent etre dans une Session
//             //Proposer de réinitialiser le mdp
//             //Créer un msg d'erreur
//             //renvoyer sur la page login
//             echo "C'est pas le bon mdp ";        }
//     }
// } else {
//     //redirect vers login
//     $url = '../pages/login.php';
//     header('Location: ' . $url);
// }




require_once('../functions/usercrud.php');
require_once('../functions/function.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
session_start();
var_dump($_POST);
$userName=userNameExist($_POST["user_name"]);
var_dump($userName);





if (isset($_POST)){
    unset($_SESSION['errorLogin']);
    $fieldExist=true;
    if(empty($_POST['user_name'] and $_POST['pwd'])){

     $url='../pages/login.php';
        header('location:'.$url);
    }if($userName['exist']==false) {
    
        $fieldExist=false;
   }if($fieldExist==true){
        $userData= getUserByUsername( $_POST['user_name']);
    
        if($userData){
            $enteredPwdEncoded=encodePwd($_POST['pwd']);
            if($userData['pwd']==$enteredPwdEncoded){
                $token = hash('sha256', random_bytes(32));
                echo '</br></br>Mon token : </br>';
                
                var_dump($token);
                //enregistrer le token en Session et dans la DB

                echo "C'est le bon mdp ";
                $data=[
                    'user_name'=>$userData['user_name'],
                    'token'=>$token
                ];
                $updateToken=updateUser($data);

                $_SESSION['authen']=[
                    'id'=>$userData['id'],
                    'role_id'=>$userData['role_id'],
                    'token'=>$token

                ];
                var_dump($_SESSION['authen']);

            
            }else { 
                
                $_SESSION['errorLogin'] =[
                    'user_name' => $userName['message'],
                    'pwd' => 'mot de passe incorrect '];
                    
                    $url='../pages/login.php';
                    header('location:'.$url);

            // echo "C'est pas  le bon mdp ";
            
            }
        }
    }else{
         $_SESSION['errorLogin'] =[
            'user_name' => $userName['message'],
             'pwd' => 'mot de passe incorrect '];
        
            $url='../pages/login.php';
            header('location:'.$url);
    }
} else{
   
    $url='../pages/login.php';
    header('location:'.$url);
}












?>