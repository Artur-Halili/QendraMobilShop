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
	}

	a{
		color:white;
	}

	#logos{
		width:70px;
		height:70px;
		
	}

	

	.register-btn{
		color:white;
	}

	.divis-btns{
		color:white;
	}

	#signini{
		color:white;
	}

	.btn-primary{
		background: #000000;
background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(56, 56, 56, 1) 100%, rgba(237, 221, 83, 1) 55%);
border-color:white;
color:yellow;
transition:ease 0.2s;
	}

	.btn-primary:hover{
		  transition: ease-in 0.2s;
transform: scale(1.1);
color:yellow;
border-color:red;
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
	.form-floating{
		margin: 10px;
	}
	</style>
</head>
<body class="text-center">
<!-- Creating a form which will post us some data in register.php file -->
<main class="form-signin">
  <form action="register.php" method="post">
    <img id="logos" class="mb-4" src="images/logos.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal register-btn">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="Name">
      <label for="floatingInput">Name</label>
    </div>
     <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Surname" name="surname">
      <label for="floatingInput">Surname</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
      <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="confirm_password">
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <div class="checkbox mb-3 divis-btns">
      <label>
        <input class="remember-btn" type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign up</button>
    <span id="signini">Already have an account: </span><a  href="login.php">Sign in</a>
  </form>
</main>

</body>
</html>