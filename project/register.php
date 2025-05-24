<?php
 /*
  We will include config.php for connection with database.
  We will get datas from index.php file, and inster them into database when Sign up button is clicked in index.php file.
  If any of session is empty we will get a message
  */

	include_once('config.php');

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $tempPass = $_POST['password'] ?? '';
    $tempConfirm = $_POST['confirm_password'] ?? '';

    if (empty($Name) || empty($username) || empty($surname) || empty($email) || empty($tempPass) || empty($tempConfirm)) {
        echo "You have not filled in all the fields.";
        exit;
    }

    if ($tempPass !== $tempConfirm) {
        echo "Passwords do not match.";
        exit;
    }

    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Name, username, email, surname, password) 
            VALUES (:Name, :username, :email, :surname, :password)";

    $insertSql = $conn->prepare($sql);
    $insertSql->bindParam(':Name', $Name);
    $insertSql->bindParam(':username', $username);
    $insertSql->bindParam(':surname', $surname);
    $insertSql->bindParam(':email', $email);
    $insertSql->bindParam(':password', $password);
    $insertSql->execute();

    header("Location: login.php");
    exit;
}


	


?>
