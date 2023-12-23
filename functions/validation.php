<?php    
function userNameIsValid($data)
{
    $length = strlen($data);
    $userInDB = getUserByUsername($data);

    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le nom  utilisateur est  court ",
        ];


    }elseif($length>50) {
        $reponse=[
            "is valid"=> false,
            "message"=> " le nom  utilisateur est  long ",
        ];
   
    }elseif ($userInDB) {
        $reponse = [
            'isValid' => false,
            'message' => 'Le nom est déjà utilisé'
        ];
    
    }
    return $reponse;
}

function nameIsValid($Name)
{
    $length = strlen($Name);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le nom  est  court ",
        ];


    }elseif($length>50) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le nom est  long ",
        ];
   
    }
    return $reponse;
}

function f_NameIsValid($fName)
{
    $length = strlen($fName);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le prenom est court ",
        ];


    }elseif($length>50) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le prenom  est trop long ",
        ];
   
    }
    return $reponse;
}

function EmailIsValid($email)
{
  
    
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $reponse=[
            "is valid"=> true,
            "message"=>  "L'adresse email '$email' est considérée comme  correct."
        ];


    }else
    {
        $reponse=[
            "is valid"=> false,
            "message"=>  "L'adresse email '$email' est considérée comme  fausse."
        ];

    };
   
    
    return $reponse;
}

function pwdIsValid($pwd)
{
    $caracteres='/[^\w\s]/';
    if(preg_match($caracteres,$pwd))
    {
        $reponse=[
            "is valid"=> true,
            "message"=>  ""
        ];

    }else
    {
        $reponse=[ 
            "is valid"=> false ,
            "message"=>  "Le mot de passe doit avoir des caracteres speciaux."
        ];

    
}

return $reponse;


}
function userProductExist($data){
    $userInDB = getProductById($data);
    $reponse = [
        'exist'=>false,   
        'message' => 'ce produit n existe pas '
    ];
    if ($userInDB) {
        $reponse = [
            'exist'=>true,
            'message' => ''
        ];
    }else{
        $reponse = [
            'exist'=>false,
            'message' => 'ce produit n existe pas '
        ];
    }

return $reponse;
}
function userProductExistByName($data){
    $userInDB = getProductByName($data);
    
    $reponse = [
        'exist'=>false,   
        'message' => 'ce produit n existe pas '
    ];
    if ($userInDB) {
        $reponse = [
            'exist'=>true,
            'message' => ''
        ];
    }else{
        $reponse = [
            'exist'=>false,
            'message' => 'ce produit n existe pas '
        ];
    }

return $reponse;
}


function userNameExist($data){
    $userInDB = getUserByUsername($data);
    $reponse = [
        'exist'=>false,   
        'message' => 'ce User_name n existe pas '
    ];
    if ($userInDB) {
        $reponse = [
            'exist'=>true,
            'message' => ''
        ];
    }else{
        $reponse = [
            'exist'=>false,
            'message' => 'ce User_name nexiste pas '
        ];
    }

return $reponse;
}

?>