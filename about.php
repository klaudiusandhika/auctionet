<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Auctionet</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-dark  py-3 justify-content-center"  >
        <div class="container-xxl text-white" style="padding-left:40px; padding-right:40px">
            <a href="#" class=" align-items-center col-md-3 mb-2 mb-md-0">
               <img src="img\auc-logo.png" alt="" style="width:90px ;">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 w-50 justify-content-around mb-md-0 ">
                <li><a href="home.php" class="nav-link px-2 fw-bold link-light">Home</a></li>
                <li><a href="products.php" class="nav-link px-2 fw-bold link-light">Products</a></li>
                <li><a href="about.php" class="nav-link px-2 fw-bold link-light active-nav">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-login fw-bold">Login</button>
                <button type="button" class="btn btn-register me-2 fw-bold">Register</button>
            </div>
        </div>
    </nav>
  </body>

  <style>
    body{
    background-image: url("img/bg-about.jpg");
    min-height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }
    nav{
        background-color:rgba(0, 0, 0, 0.5);
    }
    nav ul li{
        transition: .2s;
    }
    nav ul li:hover{
        opacity: 0.9;
    }
    .active-nav{
    color: #bd0000;
    }
    .btn-login{
        color: white;
        background-color: #bd0000;
    }
    .btn-register{
        color: white;
        border: solid 2px #bd0000;
    }
</style>