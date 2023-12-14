<!-- <?php
// include_once '../utils/connexion.php';
// include_once '../functions/functions.php';

// //include_once '../functions/userCrud.php';

?> -->
<?php
require_once("../functions/userCrud.php");
require_once("../utils/connexion.php");

$mesProduits=afficher();
var_dump($mesProduits);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

   
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>VANS SHOES</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>PRODUCTS</strong>
          </a>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
        </div>
      </div>
    </header>

    <main role="main">

      
      <div class="album py-5 bg-light">
        <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($mesProduits as $produit):?>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow"> <title><?php echo isset($produit['name'])? $produit['name'] : '' ?></title><rect width="100%" height="100%" fill="#55595c"/>
              <img src="../images/<?php echo isset($produit['img_url'])? $produit['img_url'] : '' ?>">
                <img class="card-img-top" src="../images/<?php echo isset($produit['img_url'])? $produit['img_url'] : '' ?>" alt="Louis vuitton">
                <div class="card-body">
                  <p class="card-text"><? echo $produit ['description']?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><?echo $produit['quantity']?></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><?echo $produit['price']?></button>
                    </div><small class="text-muted"><?echo $produit['quantity']?></small>
                    <small class="text-muted"><?echo $produit['price']?></small>
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <?php endforeach; ?>
           
            
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    
</html>

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
            
            
        </div>
    </div>
</section>

</body>
</html>
    </section>
</main>








           
