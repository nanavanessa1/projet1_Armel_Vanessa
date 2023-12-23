<?php
session_start();
require_once('../utils/connexion.php');
require_once('../functions/usercrud.php');
$AllUser = getAllUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

<header>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h2 class="logo">VANS SHOES</h2>
        </a>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pages/accueil.php">
                            <button type="button" class="btn btn-primary">Accueil</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gestionUser.php">
                            <button type="submit" class="btn btn-primary">Modifier un utilisateur</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="wrapper">
    <div class="form-box-login">
        <center>
            <h2>Supprimer un utilisateur</h2>
        </center>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Email</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Nom de famille</th>
                                <th scope="col">Rôle ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($AllUser as $value) : ?>
                                <tr>
                                    <th scope="row"><?php echo $value[1] ?></th>
                                    <td><?php echo $value[2] ?></td>
                                    <td><?php echo $value[4] ?></td>
                                    <td><?php echo $value[5] ?></td>
                                    <td><?php echo $value[9] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <form action="../results/userDeleteResult.php" method="post">
                        <div class="mb-3">
                            <label for="user_name" class="form-label">Entrez le nom d'utilisateur</label>
                            <input type="text" name="user_name" class="form-control" id="user_name" aria-describedby="emailHelp">
                            <p style="color: red; font-size: 0.8rem;"><?php echo  isset($_SESSION['error']['user_name']) ? $_SESSION['error']['user_name'] : '' ?> </p>
                        </div>
                        <button type="submit" class="btn btn-danger">Supprimer un utilisateur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>