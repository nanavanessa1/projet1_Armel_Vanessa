<?php session_start();
require_once('../utils/connexion.php');
require_once('../functions/usercrud.php');
$mesProduits=afficher()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>

<header>
   
    <div class="container-fluid">
      
    <a class="navbar-brand" href="#">
      <img src="../styles/img.jpg" alt="VANS SHOES" width="60" height="50" class="d-inline-block align-text-top">
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
          <a class="nav-link active" aria-current="page" href="../pages/accuiel.php"><button type="button" class="btn btn-primary">Home</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./gestionProduit.php"><button type="submit" class="btn btn-primary">Gestion de produit</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/update_deleteProducts.php"><button type="submit" class="btn btn-primary">Cliquez ici pour modifier un produit</button></a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>
</header>
<div class="wrapper">
    <div class="form-box-login">
      <center><h2>supprimer un poduit</h2></center>  
        <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<form action="../results/deleteResult.php" method="post">
  <div class="mb-3">
    <label for="id" class="form-label">entrez L'ID de l'image</label>
    <input type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp">
    <p style="color: red; font-size: 0.8rem;"><?php echo  isset($_SESSION['errorDelete']['id'])? $_SESSION['errorDelete']['id'] : ''?> </p>
  </div>
  

  <button type="submit" class="btn btn-primary">Supprimer un produit</button>
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
      <th scope="row"><?php echo isset($produit['id'])? $produit['id'] : '' ?>></th>
      <td><?php echo isset($produit['name']) ? $produit['name'] : '' ?></td>
      <td><?php echo isset($produit['quantity']) ? $produit['quantity'] : '' ?></td>
      <td><?php echo isset($produit['price']) ? $produit['price'] : '' ?></td></td>
      <td><img  src="<?php echo isset($produit['img_url']) ? $produit['img_url'] : '' ?>" class="card-img-top" alt="..."  style="width: 9rem;"></td>
      <td><?php echo isset($produit['description'])? $produit['description'] : ''?></td>

        
     </tr>
    
  </tbody> <?php }?>
</table>
    

                  

 
                </div>
                
              </div>
            </div>
          </div>

        </div>
    <?php ?></div>
    
    <div>

    </div>
    
</body>
</html>
