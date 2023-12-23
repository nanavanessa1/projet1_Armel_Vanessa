  
<?php
session_start();
if(isset($_POST)){

if(!isset($_SESSION['panier']))
{
  $_SESSION['panier']=[];
  
}if(isset($_POST['id']))
{
 $i=$_POST['id'];


if(isset( $_SESSION['panier'][$i]))
{
  
   
 
  $_SESSION['panier'][$i]++;
}
 
else
{  
  
  $_SESSION['panier'][$i]=1;
 

}

$url="../pages/cart.php";
    header('location:'.$url);
}

}

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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    color: #333;
  }

  .navbar {
    background: linear-gradient(to right, #f06, #9f6);
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand {
    font-size: 1.5em;
    font-weight: bold;
    color: #fff !important;
  }

  .navbar a {
    color: #fff;
    margin-right: 15px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .navbar a:hover {
    color: #ffc107;
  }

  .header {
    text-align: center;
    padding: 80px 0;
    background: url('shoe-background.jpg') center/cover no-repeat;
    color: #fff;
    position: relative;
  }

  .header h1 {
    font-size: 3em;
    font-weight: bold;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  }

  .btn {
    display: inline-block;
    padding: 15px 30px;
    margin-top: 20px;
    font-size: 1.2em;
    text-align: center;
    text-decoration: none;
    background: linear-gradient(to right, #f06, #9f6);
    color: #fff;
    border-radius: 30px;
    transition: background 0.3s ease;
  }

  .btn:hover {
    background: linear-gradient(to right, #9f6, #f06);
  }

  .card {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 15px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: scale(1.02);
  }

  .footer {
    background: linear-gradient(to right, #f06, #9f6);
    color: #fff;
    padding: 20px 0;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
  }

  @media (max-width: 768px) {
    .navbar {
      text-align: center;
    }

    .navbar a {
      display: block;
      margin: 10px 0;
    }

    .header {
      padding: 50px 0;
    }

    .header h1 {
      font-size: 2em;
    }

    .btn {
      padding: 10px 20px;
      font-size: 1em;
      margin-top: 10px;
    }
  }
</style>
    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

        </li>
      </ul>
    </div>

    

  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button></a>
         
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">

      </a>
      
      
    </div>
  </div>
  <nav class="navbar bg-body-tertiary">
  
  </div>
  <h4><a href="../pages/cart.php"> <button type="button" class="btn btn-primary position-relative">
  panier <img src="../images/shopping.png" alt=""  class="card-img-top" alt="..."  style="width: 2rem;">
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button></a></h4>
</nav>
</header>

   
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
 
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="album.css" rel="stylesheet">
  </head>

  <body>
  <section class="products">
    <marquee behavior="alternate">
        <h1 style="color: navy">COMMANDEZ UNE CHAUSSURE A VOTRE GOUT ICI</h1>
    </marquee>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>PRODUCTS</strong>
          </a>
          <h4><a href="../pages/cart.php"><button type="button" class="btn btn-primary position-relative">
          <link rel="shortcut icon" href="favicon.ico" type="shopping.png/x-icon"/>
        </div>
      </div>
    </header>

    <main role="main">

      
      <div class="album py-5 bg-light">
        <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="../styles/luxe.jpg"> <!-- Include your own stylesheet for additional styling -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            padding: 20px;
        }

        .card {
            margin-bottom: 50px;
            border: 1px solid #ddd;
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            object-fit: cover;
            height: 100px; /* Adjust the height as needed */
            width:100px
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card-text {
            color: #555;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-center {
            align-items: center;
        }

        .badge {
            margin-right: 5px;
        }

        .price {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<main>
    <div class="container">
        <div class="row">
            <?php foreach ($mesProduits as $produit) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="../images/<?php echo isset($produit['img_url']) ? $produit['img_url'] : '' ?>" alt="<?php echo isset($produit['name']) ? $produit['name'] : '' ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo isset($produit['name']) ? $produit['name'] : '' ?></h5>
                            <p class="card-text "><?php echo isset($produit['description']) ? $produit['description'] : '' ?></p>
                                    <span class="price"><?php echo isset($produit['price']) ? $produit['price'] . '$' : '' ?></span>
                                    <form action="../pages/cart.php" method="">
                                        <input type="text" hidden name="action" value="addToCart">
                                        <input type="text" hidden name="id" value="<?php echo $produit['id'] ;?>">
                                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

</body>
  
    








           
