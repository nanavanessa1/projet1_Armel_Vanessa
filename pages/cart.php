<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css"> <!-- Include your own stylesheet for additional styling -->
</head>
<body>

<header class="bg-primary text-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../images/logo.png" alt="Logo" width="150" height="120" class="d-inline-block align-text-top">
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
                        <a class="nav-link active" aria-current="page" href="../pages/products.php">
                            <button type="button" class="btn btn-light">Boutique</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <h2 class="text-center">Bienvenue dans votre panier</h2>

    <?php if (!empty($_SESSION['panier'])) { ?>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Image</th>
                            <th scope="col">Prix total</th>
                            <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($panier as $key => $product) {
                            $pannierID = getProductByIdPannier($key);
                            $total += $pannierID['price'] * $product;
                        ?>
                            <tr>
                                <td><?php echo $pannierID['name']; ?></td>
                                <td><?php echo $product; ?></td>
                                <td>
                                    <img src="<?php echo $pannierID['img_url']; ?>" class="card-img-top" alt="..." style="width: 9rem;">
                                </td>
                                <td><?php echo $pannierID['price'] * $product; ?>$ CAD</td>
                                <td>
                                    <form action="" method="post">
                                        <input type="text" hidden name="id" value="<?php echo $key; ?>">
                                        <button type="submit" class="btn btn-danger">
                                            <img src="../styles/delete-icon.png" class="card-img-top" alt="..." style="width: 3rem;">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th colspan="4" class="text-end">TOTAL : <?php echo $total; ?> $ CAD</th>
                            <th>
                                <a href="../pages/adress.php">
                                    <button type="button" class="btn btn-success">Payer</button>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } else {
        echo '<p class="text-center">Le panier est vide</p>';
        $url = '../pages/products.php';
        header('location:' . $url);
    } ?>
</div>

</body>
</html>