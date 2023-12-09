<?php
include_once '../utils/connexion.php';
include_once '../functions/functions.php';

include_once '../functions/userCrud.php';

?>
?>
<!DOCTYPE html>
<html lang="en">

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <link rel="stylesheet" href="../styles/products.css">
</head>
<body>

<section class="products">
    <marquee behavior="alternate">
        <h1 style="color: navy">Products</h1>
    </marquee>
    <div class="wrapper deux">
        <div>
            <h3>Trouve ton prochain</h3>
            <h2>Article ici</h2>
        </div>
    </div>
</section>

<section class="site-section aos-init aos-animate" id='sticky'>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Nos articles</h2>
                <p class="color-black-opacity-5">Nos articles les plus demandés</p>
            </div>
        </div>

        <div class="row">
            <?php
            // Tableau associatif de produits
            $products = array(
                array(
                    'image' => 'images/image1.JPG',
                    'price' => '30$',
                    'name' => 'la vanessai',
                ),
                // Ajoutez d'autres produits selon vos besoins
            );

            // Boucle pour afficher chaque produit
            foreach ($products as $product) {
                ?>
                <div class="col-md-4 mb-4 col-lg-4" style="max-width: 300px;">
                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="<?php echo $product['image']; ?>" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a href="./pages/product_detail.php" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark">
                                <span class="fas fa-cart-arrow-down"></span>
                            </a>
                            <a class="px-3 mb-3 category" href="#"><?php echo $product['price']; ?></a>
                            <h2 class="mb-1"><a href="#"><?php echo $product['name']; ?></a></h2>
                            <span class="address"><address></address></span>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

</body>
</html>
    </section>
</main>








           
