<?php

session_start();

include_once('config.php');
if(empty($_SESSION['username'])){
    header('Location:login.php');
}

$sql="SELECT * FROM users";
$selectUsers=$conn->prepare($sql);
$selectUsers->execute();

$users_data=$selectUsers->fetchall();
?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Dashboard</title>
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
 
 <header id="headers" class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow">
  <img id="logo" src="images/logos.png"><strong id="titla">endra Mobil Shop</strong><br>
  <a id="welcome" class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php"><?php echo "Welcome to Dashboard ".$_SESSION['username']; ?></a><br>
  <button class="navbar-toggler position-absolute  d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span id="navigabar" class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div id="divid" class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
           
            <li class="nav-item">
              <a id="homie" class="nav-link" href="home.php">
                <span data-feather="file"></span>
                Home
              </a>
              <br>
            </li>
          <li class="nav-item">
            <a id="dashb" class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
            <br>
          </li>

          <li class="nav-item">
            <a id="aboutus" class="nav-link active" aria-current="page" href="aboutus.php">
              <span data-feather="home"></span>
              About Us
            </a>
          </li>
<br>
          <li class="nav-item">
            <a id="Products" class="nav-link" href="list_products.php">
              <span data-feather="file"></span>
              Products
            </a>
            <br>
          </li>
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
        <h1 class="h2"><p id="zagi"> Dashboard</p></h1>
        
      </div>



<h2>Users</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Emri</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
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
                <td><?php echo $user_data['name']; ?></td>
                <td><?php echo $user_data['username']; ?></td>
                <td><?php echo $user_data['email']; ?></td>
                <!-- If we want to update a user we need to link into editUsers.php -->
                <td><a href="editUsers.php?id=<?= $user_data['id'];?>">Update</a></td>
                  <!-- If we want to delete a user we need to link into deleteUsers.php -->
                <td><a href="deleteUsers.php?id=<?= $user_data['id'];?>">Delete</a></td>
              </tr>
              
           <?php  } ?>
           
            
          </tbody>
        </table>
      </div>
    

</main>
  </div>
</div>


  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
<style>

#logo{
width:70px;
height:70px;
background-color: #273036;
}

.position-sticky{
  
}

#homie{
 background-color:#273036;
  color:white;
  border-radius:15px;
  text-align: center;
}

.container-fluid{

}

#homie:hover{
 color:black;
  background-color:white;
-webkit-box-shadow:0px 0px 5px 5px rgba(209, 214, 215, 0.155);
-moz-box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.155);
box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.155);
}

#dashb:hover{
  
   transition: ease-in 0.3s;
transform: scale(1.1);
}

#aboutus:hover{
  color:black;
  background-color:white;
 -webkit-box-shadow:0px 0px 5px 5px rgba(209, 214, 215, 0.15);
-moz-box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.15);
box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.15);
}

#Products:hover{
  color:black;
  background-color:white;
 -webkit-box-shadow:0px 0px 5px 5px rgba(209, 214, 215, 0.15);
-moz-box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.15);
box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.15);
}

#orders:hover{
  color:black;
  background-color:white;
 -webkit-box-shadow:0px 0px 5px 5px rgba(209, 214, 215, 0.15);
-moz-box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.15);
box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.15);
}

#welcome{
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

#adresa{
 position:absolute;
bottom:7px;
right:46.5%;
  color: black;
  font-family: bold;
  font-weight: 100;
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

#titla{
  color:white;
  position:absolute;
  left:60px;
  transition: ease-in 0.3s;
transform: scale(1.0);
}


#aboutus{
   background-color:#273036;
  color:white;
  border-radius:15px;
  text-align: center;
}

#navigabar{
  color:red;
}

#headers{
 background-color:#273036;
 height:75px;
}

#Products{
   background-color:#273036;
  color:white;
  border-radius:15px;
  text-align: center;
}

#orders{
   background-color:#273036;
  color:white;
  border-radius:20px;
  text-align: center;
}

#zagi{


}

#sidebarMenu{
background-color:transparent;
}

a{
  color:black;
}

a:hover{
color:cornflowerblue;
transition: ease-in 0.3s;
transform: scale(1.1);
}

#dashb{
  color:black;
  background-color:#f9f6ee;
  text-align: center;
  border-radius: 20px;
 -webkit-box-shadow:0px 0px 5px 5px rgba(209, 214, 215, 0.155);
-moz-box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.155);
box-shadow: 0px 0px 5px 5px rgba(209, 214, 215, 0.155);
}
  </style>



 </body>
 </html>