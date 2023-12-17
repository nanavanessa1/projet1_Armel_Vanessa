<?php 
    session_start();
    require_once('../utils/connexion.php');
  require_once('../functions/usercrud.php');
$mesProduits=afficherProduct();
//var_dump($myProduct);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="../styles/register.css" /> -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
<body>

<header>
    
    <div class="container-fluid">
      
    <a class="navbar-brand" href="#">
      <img src="../styles/img.jpg" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
       <h2 class=logo>"VANS SHOES" </h2>
    </a>
  </div>
    <!-- <nav class="navigation">
    <a href="../pages/gestionProduit.php"><button type="submit" class="btn btn-primary">gestion de produit</button></a>
    <a href="./deleteProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a> -->
        <!-- <a href="">home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">contact</a> -->
        <!-- <a href="../pages/accueil1.php"><button class="btnLogin-popup">home</button></a> -->



    <!-- </nav> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/accueil1.php"><button type="button" class="btn btn-primary">Home</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./gestionProduit.php"><button type="submit" class="btn btn-primary">gestion de produit</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./deleteProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>
</header>
<div class="wrapper">
    <div class="form-box-login">
        <center><h2>Modifier un produit</h2></center>
        <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<form action="../results/updateResult.php" method="post">
<div class="mb-3">
    <label for="id" class="form-label">Quel est le produit a modifier ?</label>
    <input type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp">
    <p style="color: red; font-size: 0.8rem;"><?php echo  isset($_SESSION['errorUpdate']['id'])? $_SESSION['errorUpdate']['id'] : ''?> </p>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantite</label>
    <input type="text" class="form-control" id="quantity" name="quantity" >
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">prix</label>
    <input type="text" class="form-control" id="price" name="price"  >
  </div>
  <div class="mb-3">
    <label for="img_url" class="form-label">image_url</label>
    <input type="text" class="form-control" id="img_url"name="img_url"  >
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input type="text" class="form-control" id="description" name="description" >
  </div>

  <button type="submit" class="btn btn-primary">modifier un produit</button>
  <p></p>
  <p></p>
  <p></p>
 
 
</form> 
<!-- <div>
 <a href="./deleteProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a>   
</div> -->
    </div>

    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th scope="col">img_url</th>
      <th scope="col">description</th>


    </tr>
  </thead>
  <tbody>
    
    <tr>
      <?php foreach( $mesProduits as $produit) {?>
      <th scope="row"><?php echo $product[0]?></th>
      <td><?php echo $produit[1]?></td>
      <td><?php echo $produit[2]?></td>
      <td><?php echo $produit[3]?></td>
      <td><img src="<?php echo $produit[4] ?>" class="card-img-top" alt="..." style="width: 9rem;"></td>
      <td><?php echo $produit[5]?></td>

        
     </tr>
    
  </tbody> <?php }?>
</table>


    <?php  foreach($mesProduits as $produit){ ?>
    <div class="col">
          <div class="card shadow-sm" >
            
            <img src="<?php echo $produit[4] ?>" class="card-img-top" alt="...">
            <text x="50%" y="50%" fill="#eceeef" dy=".3em"> <H3><?php echo $produit[1] ?></H3></text>
            <div class="card-body">
              <p class="card-text"><?php echo $produit[5] ?> </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-body-secondary">ID =<?php echo $produit[0] ?> </small>
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">acheter</button> -->
                  <a href="#" class="card-link"></a>

                </div>
                
              </div>
            </div>
          </div>

        </div>
    <?php }?></div>
    
    <div>

    </div>
    
</body>
</html>
