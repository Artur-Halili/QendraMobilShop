<?php
include_once('config.php');

$sql="SELECT * FROM qms";
$selectMovies=$conn->prepare($sql);
$selectMovies->execute();
$movie_data=$selectMovies->fetchAll();

?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
 </head>
 <body>

<style>
  #logo{
width:60px;
height:60px;
}

.col:hover{
  transition: ease-in 0.3s;
transform: scale(1.1);

}

a:hover{
color:cornflowerblue;
transition: ease-in 0.3s;
transform: scale(1.1);
}

.col{

}

#dashb{
  right:200px;
  top:30px;
  color:white;
  position:absolute;
}
  </style>

 <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img id="logo" src="images/logos.png">
        <strong>endra Mobil Shop</strong> <li class="nav-item">
          
            </a>
            <br>
          </li>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <a href="dashboard.php"><span class="navbar-toggler-icon"></span></a>
      </button>
    </div>
  </div>
</header>
<section  class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class=" mx-auto">
        <h1 class="fw-light">Katalogu</h1>
        <p class="lead text-muted">Perfshirja e Produkteve per Nevojat e juaj.</p>
        <p>
          <a href="https://www.instagram.com/mobishopqendra/?__d=1" class="btn btn-primary my-2">Instagram</a>
          <a href="https://www.facebook.com/p/MOBIL-SHOP-QENDRA-100057218270929/" class="btn btn-secondary my-2">Facebook</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-dark">
    <div class="container">


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">


        <?php
include_once('config.php');

$sql = "SELECT * FROM qms";
$selectProducts = $conn->prepare($sql);
$selectProducts->execute();
$products_data = $selectProducts->fetchAll();
?>

<!-- Inside your HTML -->

<?php foreach ($products_data as $product) { ?>
  <div class="col">
    <div class="card shadow-sm">
<img src="images/<?php echo $product['Image']; ?>" height="300">
      <div class="card-body">
        <h4><?php echo $product['Name']; ?></h4>
        <p class="card-text"><?php echo $product['Desc']; ?></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="details.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-secondary">View</a>
            <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
          </div>
          <small class="text-muted">Price: $<?php echo $product['Price']; ?></small>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
