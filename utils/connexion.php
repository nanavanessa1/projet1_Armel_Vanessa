<?php
// $server = "localhost";
// $userName = "root";
// $pwd = "";
// $db = "ecom1_project";

// $conn = mysqli_connect($server, $userName, $pwd, $db);
// // if ($conn) {
// //     echo "Connected to the $db database successfully";
// //     global $conn;
// // } else {
// //     echo "Error : Not connected to the $db database";
// // }
// if (!$conn) {
//     die("La connexion à la base de données a échoué : " . mysqli_connect_error());
// }
// else{
//     echo "Connected to the $db database successfully";
//    global $conn;
// }
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ecom1_project');

// Tentative de connexion à la base de données
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
} else {
    echo "Connected to the " . DB_NAME . " database successfully";
}

?>