<?php 
function createUser(array $data)
{
    global $conn;
    
    $query = "INSERT INTO user('user_name','pwd','fname','billing_address') 
    VALUES (?, ?, ?, ?,?,0,0,'',3);";
    $stmt= mysqli_prepare($conn,$query);
    var_dump($stmt);

    if ($stmt = mysqli_prepare($conn, $query)) {
        
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'],
            $data['lname'],
        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
        return 'it is ok!!!!';
    }
}
 function getUserByUsername(string $user_name)
 {
    global $conn;

    $query = "SELECT * FROM user WHERE user.user_name = '" . $user_name . "';";

   $result = mysqli_query($conn, $query);

   // avec fetch row : tableau indexé
   $data = mysqli_fetch_assoc($result);
    return $data;
 }

?>
/**