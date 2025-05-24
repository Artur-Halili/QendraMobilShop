<?php
session_start();

include_once('config.php');
$id = $_GET['id'];

// Correct SQL query with a properly formatted placeholder
$sql = "SELECT * FROM qms WHERE id = :id";
$selectUser = $conn->prepare($sql);
$selectUser->bindParam(':id', $id);
$selectUser->execute();

// Fetching the data from the query result
$user_data = $selectUser->fetch();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo "Welcome to Dashboard ".$_SESSION['username']; ?></a>
  <div class="navbar-nav">
    <a class="nav-link px-3" href="logout.php">Sign out</a>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">Dashboard</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h2>Edit Product Details</h2>
      <div class="table-responsive">
        <form action="update.php" method="post">
          <div class="form-floating">
            <input readonly="readonly" type="text" class="form-control" id="floatingInput" placeholder="id" name="id" value="<?php echo $user_data['id']; ?>">
            <label for="floatingInput">ID</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="Name" value="<?php echo $user_data['Name']; ?>">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="Description" value="<?php echo $user_data['Desc']; ?>">
            <label for="floatingInput">Description</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="floatingInput" placeholder="Price" name="Price" value="<?php echo $user_data['Price']; ?>">
            <label for="floatingInput">Price</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Image" name="Image" value="<?php echo $user_data['Image']; ?>">
            <label for="floatingInput">Image</label>
          </div>
          <br>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit1">Update</button>
        </form>
      </div>
    </main>
  </div>
</div>

<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>