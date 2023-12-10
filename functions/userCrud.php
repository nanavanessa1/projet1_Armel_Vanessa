<?php
function createUser($data)
{

    var_dump("la fonction create user marche");
    
    global $conn;
    
    $query = "INSERT INTO user VALUES (NULL,?,?,?,?,?,'','','',3);";

$stmt = mysqli_prepare($conn, $query);
var_dump($stmt);
//printf("Error message: %s\n", mysqli_error($conn));    

if ($stmt) {
        
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'], 
            $data['lname']
        );

        $result = mysqli_stmt_execute($stmt);
        
          return 'Ca fonctionne!!!!!!!!!!';
    }
    else{return 'Dommage!!! ca marche pas ';}
}
function getUserByUsername( $user_name)
{
    global $conn;
// Todo : changer pour requete preparee
//SELECT * FROM user WHERE user_name = 'william2002';
    $query = "SELECT * FROM user WHERE user_name = '$user_name' ;";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}
function updateUser($data){
    global $conn;
    $query= "UPDATE user SET token=? WHERE user_name=?";
    if($stmt=mysqli_prepare($conn, $query)) {
        //lecture des marqueurs 
        mysqli_stmt_bind_param($stmt,"ss", 
       
        $data["token"],
         $data["user_name"]
        );
    
    // execution de la requete 
    $result=mysqli_stmt_execute($stmt);
    echo "<br>";
    echo "modification reussie";
    var_dump($result);
    echo "<br>";
    }}


    //products
    function ajouter($image_url,$nom,$prix,$desc,$quantity)
    {
       if (require("./utils/connexion.php"))
       {
         $req=$conn->prepare("INSERT INTO product (name ,quantity,price,image_url,description) VALUES ($image_url,$nom,$prix,$desc,$quantity)")

         $req->execute(array($image_url,$nom,$prix,$desc,$quantity));

         $req->closeCursor();
      
        }

    }

     function afficher()
     {
        if (require("./utils/connexion.php"))
    {
        $req=$conn->prepare("SELECT * FROM products order by id DESC")
   
        $req->execute();

        $data =$req->fetchAll(PDO::FETCH_OBJ);
        // Recuperatio des donnes sur forme d'objet
        return $data;

        $req->closeCursor();
    }


     }
     function supprimer($id)
     {
        if (require("./utils/connexion.php"))
        $req=$conn->prepare("DELETE  FROM product where id=?") ;
        $req->execute(array($id));
     }


?>