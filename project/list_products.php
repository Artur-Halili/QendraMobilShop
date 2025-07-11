<?php

session_start();

include_once('config.php');

if(empty($_SESSION['username'])){
    header('Location:login.php');
}

$sql="SELECT * FROM qms";
$selectUsers=$conn->prepare($sql);
$selectUsers->execute();

$users_data=$selectUsers->fetchAll();

?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Products</title>
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
 
 <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
 <img id="logo" src="images/logos.png"><strong id="titla">endra Mobil Shop</strong><br>
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="list_products.php"><?php echo "Welcome to Products ".$_SESSION['username']; ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
      <ul class="nav flex-column">
           <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === 'true') { ?>
<?php } ?>
            <li class="nav-item">
              <a id="homie" class="nav-link" href="home.php">
                <span data-feather="file"></span>
                Home
              </a>
            </li>
            <br>
          <li class="nav-item">
            <a id="dashb" class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <br>

             <li class="nav-item">
              <a id="aboutus" class="nav-link" href="aboutus.php">
                <span data-feather="file"></span>
                About Us
              </a>
            </li>

            <br>

          <li class="nav-item">
            <a id="products" class="nav-link" href="list_products.php">
              <span data-feather="file"></span>
              Products
            </a>
          </li>
<br>
          <?php  ?>
          <li class="nav-item">
            <a id="orders" class="nav-link" href="order.php">
              <span ></span>
              Orders
            </a>
          </li>
        </ul>
   <br>
        <br>
        <br>
        <br>
        
<br>
<br>
<br>
<br>
       
      </div>
    </nav>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mobile Store</h1>
        
      </div>


 <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === 'true') { ?>
  <!-- admin-only menu items and content -->
<?php } ?>
        <h2>Products</h2>
      <a id="prodbtn" href="products.php" class="btn btn-primary">Add Product</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="col1">
            <tr class="col1">
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <img id="logos" src="images/logos.png">
<p id="adresa">Ulpian te Rrethi me Flamur</p>
            <?php foreach ($users_data as $user_data) { ?>
                <tr>
                <td><?php echo $user_data['id']; ?></td>
                <td><?php echo $user_data['Name']; ?></td>
                <td><?php echo $user_data['Desc']; ?></td>
                <td><?php echo $user_data['Price']; ?></td>
                <!-- If we want to update a movie we created a link which will link us in edit.php file: -->
                <td><a href="edit.php?id=<?= $user_data['id'];?>">Update</a></td>
                <!-- If we want to Delete a movie we created a link which will link us in delete.php file -->
                <td><a href="delete.php?id=<?= $user_data['id'];?>">Delete</a></td>
              </tr>
              
           <?php  } ?>
           
            
          </tbody>
        </table>
      </div>
     <?php ?>
    </main>
  </div>
</div>


  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>

  <style>

  

    #homie{
 background-color: #273036;
  color:white;
  border-radius:15px;
  text-align: center;
  
}

#titla{
  color:white;
  position:absolute;
  left:60px;
  transition: ease-in 0.3s;
transform: scale(1.0);

}

#adresa{
  position:absolute;
bottom:7px;
right:46.5%;
  color: black;
  font-family: bold;
  font-weight: 100;
}

.container-fluid{

}

#logo{
width:70px;
height:70px;

}

#logos{
margin:-10px;
width:100px;
height:100px;
position:absolute;
left:45%;
bottom:60px;
background-color:#273036;
border-radius:15px;
-webkit-box-shadow:0px 0px 7px 7px  rgba(94, 101, 99, 0.84);
-moz-box-shadow: 0px 0px 7px 7px rgba(94, 101, 99, 0.84);
box-shadow: 0px 0px 7px 7px rgba(94, 101, 99, 0.84);
}

#sidebarMenu{
  
}

#homie:hover{
  color:black;
  background-color:white;
  -webkit-box-shadow:0px 0px 3px 3px rgba(166,186,191,0.15);
-moz-box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
}

#dashb:hover{
  color:black;
  background-color:white;
  -webkit-box-shadow:0px 0px 3px 3px rgba(166,186,191,0.15);
-moz-box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
}

#aboutus:hover{
 color:black;
  background-color:white;
  -webkit-box-shadow:0px 0px 3px 3px rgba(166,186,191,0.15);
-moz-box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
}

#products:hover{
  
  -webkit-box-shadow:0px 0px 3px 3px rgba(166,186,191,0.15);
-moz-box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
}

#orders:hover{
  color:black;
  background-color:white;
  -webkit-box-shadow:0px 0px 3px 3px rgba(166,186,191,0.15);
-moz-box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
box-shadow: 0px 0px 3px 3px rgba(166,186,191,0.15);
}

#prodbtn{
background: #000000;
background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(56, 56, 56, 1) 100%, rgba(237, 221, 83, 1) 55%);
border-color:white
	
}

#prodbtn:hover{
  color:yellow;
  transition: ease-in 0.3s;
transform: scale(1.0);
}

a{
  text-decoration:none;
  color:black;
}

a:hover{
color:cornflowerblue;
transition: ease-in 0.3s;
transform: scale(1.1);
}

#aboutus{
   background-color: #273036;
  color:white;
  border-radius:15px;
  text-align: center;
}

#products{
   background-color: #273036;
  color:white;
  border-radius:15px;
  text-align: center;
  color:black;
  background-color:#f9f6ee;
  -webkit-box-shadow:0px 0px 5px 5px rgba(209, 214, 215, 0.155);
-moz-box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.155);
box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.155);
}

#orders{
   background-color: #273036;
  color:white;
  border-radius:15px;
  text-align: center;
}

#dashb{   
background-color: #273036;
  color:white;
  border-radius:15px;
  text-align: center;
}
  </style>
</html>



 </body>
 </html>