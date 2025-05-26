<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <style>



        html,
    body {
      height: 100%;
    }



    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
     background: #000000;
background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(56, 56, 56, 1) 100%, rgba(237, 221, 83, 1) 55%);
color:white;
    }



    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    
    .form-signin .form-floating:focus-within {
    z-index: 2;
  }


  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }


  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

#floatinginput{
  color:gray;
  font-family: "Lucida Console", "Courier New", monospace;
}

#floatingpassword{
  color:gray;
  font-family: "Lucida Console", "Courier New", monospace;
}

#signupi{
  color:cornflowerblue;
}

#signini{
  background: #000000;
background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(56, 56, 56, 1) 100%, rgba(237, 221, 83, 1) 55%);
border-color:white;
color:yellow;
}

.custom-hover:hover{
  transition: ease-in 0.2s;
transform: scale(1.1);
}



  </style>
</head>
<body class="text-center">
<!-- Creating a from which will post some data in loginLogic.php file -->
<main class="form-signin">
  <form action="loginLogic.php" method="post">
    <img class="mb-4" src="images/logos.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-light">Please sign in</h1>


    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label id="floatinginput" for="floatingInput">Username</label>
    </div><br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label id="floatingpassword"  for="floatingPassword">Password</label>
    </div>


    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button id="signini" class="w-100 btn btn-lg btn-primary custom-hover" type="submit" name="submit">Sign in</button><br>
    <p>Dont have an account:<a id="signupi" href="index.php" >Sign up</a> </p>
  </form>
</main>


</body>
</html>