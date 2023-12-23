<?php
session_start();
require_once('../utils/connexion.php');
require_once('../functions/usercrud.php');
$mesProduits = afficher();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un produit</title>
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
                            <button type="button" class="btn btn-primary">Home</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gestionProduit.php">
                            <button type="submit" class="btn btn-primary">Gestion de produit</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/update_deleteProducts.php">
                            <button type="submit" class="btn btn-primary">Modifier un produit</button>
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
            <h2>Supprimer un produit</h2>
        </center>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <form action="../results/deleteResult.php" method="post">
                    <div class="mb-3">
                        <label for="id" class="form-label">Entrez l'ID du produit à supprimer</label>
                        <input type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp">
                        <p style="color: red; font-size: 0.8rem;"><?php echo  isset($_SESSION['errorDelete']['id']) ? $_SESSION['errorDelete']['id'] : '' ?> </p>
                    </div>
                    <button type="submit" class="btn btn-primary">Supprimer le produit</button>
                </form>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mesProduits as $produit) : ?>
                            <tr>
                                <th scope="row"><?php echo $produit['id'] ?? ''; ?></th>
                                <td><?php echo $produit['name'] ?? ''; ?></td>
                                <td><?php echo $produit['quantity'] ?? ''; ?></td>
                                <td><?php echo $produit['price'] ?? ''; ?></td>
                                <td><img src="<?php echo $produit['img_url'] ?? ''; ?>" class="card-img-top" alt="..." style="width: 9rem;"></td>
                                <td><?php echo $produit['description'] ?? ''; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>

</html>