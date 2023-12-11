<?php
//require("./utils/connexion.php");
// 
function createUser($data)
{
    global $conn;

    // Use prepared statement to prevent SQL injection
    $query = "INSERT INTO user (user_name, email, password, first_name, last_name, role_id) VALUES (?,?,?,?,?,3)";

    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'],
            $data['lname']
        );

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Return a success message or handle success as needed
            return 'Ca fonctionne!!!!!!!!!!';
        } else {
            // Return an error message or handle the error as needed
            return 'Erreur lors de l\'exécution de la requête : ' . mysqli_error($conn);
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Return an error message or handle the error as needed
        return 'Erreur lors de la préparation de la requête : ' . mysqli_error($conn);
    }
}

function updateUser($data) {
    global $conn;

    $query = "UPDATE user SET token=? WHERE user_name=?";
    
    // Use prepared statement to prevent SQL injection
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $data["token"], $data["user_name"]);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Modification réussie";
        } else {
            // Handle the error or return an error message
            echo "Erreur lors de l'exécution de la requête : " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle the error or return an error message
        echo "Erreur lors de la préparation de la requête : " . mysqli_error($conn);
    }
}
function getUserByUsername($user_name)
{
    global $conn;

    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM user WHERE user_name = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind parameter
        mysqli_stmt_bind_param($stmt, "s", $user_name);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result set
        $result = mysqli_stmt_get_result($stmt);

        // Fetch the data as an associative array
        $data = mysqli_fetch_assoc($result);

        // Close the statement
        mysqli_stmt_close($stmt);

        return $data;
    } else {
        // Handle the error or return an error message
        echo "Erreur lors de la préparation de la requête : " . mysqli_error($conn);
        return null; // Or handle the error in another way, e.g., return an empty array
    }
}


    

    // }
    // products
    function ajouter($image_url, $nom, $prix, $desc, $quantity)
{
    // Inclure le fichier de connexion
    require_once("../utils/connexion.php");

    // Vérifier la connexion
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }

    // Préparer la requête SQL avec des marqueurs de paramètres
    $req = mysqli_prepare($conn, "INSERT INTO product (name, quantity, price, image_url, description) VALUES (?, ?, ?, ?, ?)");

    // Vérifier si la préparation de la requête a échoué
    if (!$req) {
        die("Erreur de préparation de la requête : " . mysqli_error($conn));
    }

    // Liaison des paramètres à la requête préparée
    mysqli_stmt_bind_param($req, "sddss", $nom, $quantity, $prix, $image_url, $desc);

    // Exécution de la requête préparée
    $result = mysqli_stmt_execute($req);

    // Vérifier si l'exécution a réussi
    if ($result) {
        echo "Le produit a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du produit : " . mysqli_error($conn);
    }

    // Fermer la requête préparée
    mysqli_stmt_close($req);

    // Fermer la connexion à la base de données
    mysqli_close($conn);
}


function afficher() {
    require_once("../utils/connexion.php");

    // Vérifier la connexion
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }

    // Préparer la requête SQL
    $req = mysqli_prepare($conn, "SELECT * FROM product ORDER BY id DESC");

    // Vérifier si la préparation de la requête a échoué
    if (!$req) {
        die("Erreur de préparation de la requête : " . mysqli_error($conn));
    }

    // Exécution de la requête préparée
    mysqli_stmt_execute($req);

    // Récupération des données sous forme d'objet
    $result = mysqli_stmt_get_result($req);

    // Récupération des données sous forme d'objet
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Fermer la requête préparée
    mysqli_stmt_close($req);

    // Fermer la connexion à la base de données
    mysqli_close($conn);

    return $data;
    var_dump($data);
}

     
    function supprimer($id)
    {
        // Inclure le fichier de connexion
        require_once("../utils/connexion.php");
    
        // Vérifier la connexion
        if (!$conn) {
            die("La connexion à la base de données a échoué : " . mysqli_connect_error());
        }
    
        // Préparer la requête SQL avec des marqueurs de paramètres
        $req = mysqli_prepare($conn, "DELETE FROM product WHERE id = ?");
    
        // Vérifier si la préparation de la requête a échoué
        if (!$req) {
            die("Erreur de préparation de la requête : " . mysqli_error($conn));
        }
    
        // Liaison du paramètre à la requête préparée
        mysqli_stmt_bind_param($req, "i", $id);
    
        // Exécution de la requête préparée
        $result = mysqli_stmt_execute($req);
    
        // Vérifier si l'exécution a réussi
        if ($result) {
            echo "Le produit a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression du produit : " . mysqli_error($conn);
        }
    
        // Fermer la requête préparée
        mysqli_stmt_close($req);
    
        // Fermer la connexion à la base de données
        mysqli_close($conn);
    }

?>