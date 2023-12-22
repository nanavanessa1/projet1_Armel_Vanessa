<?php 
    session_start();
    require_once('../utils/connexion.php');
  require_once('../functions/usercrud.php');
$mesProduits=afficher();
var_dump($mesProduits);
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
      <img src="../styles/front.jpg" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
       <h2 class=logo>"VANS SHOES" </h2>
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
          <a class="nav-link active" aria-current="page" href="../pages/accuiel.php"><button type="button" class="btn btn-primary">Accuiel</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./gestionProduit.php"><button type="submit" class="btn btn-primary">gestion de produit</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./deleteProducts.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a>
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
    

  <button type="submit" class="btn btn-primary">modifier un produit</button>
  <p></p>
  <p></p>
  <p></p>
 
 
</form> 

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
      <th scope="row"><?php echo $produit['id']?></th>
      <td><?php echo $produit['name']?></td>
      <td><?php echo $produit['quantity']?></td>
      <td><?php echo $produit['price']?></td>
      <td><?php echo $produit['img_url']?></td>
      <td><?php echo $produit['description']?></td>
    
      

        
     </tr>
    
  </tbody> <?php }?>
  <button type="submit" class="btn btn-primary">modifier un produit</button>
</table>


    
            </div>
          </div>

        </div>
    <?php ?></div>
    
    <div>

    </div>
    
</body>
</html>
