<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $Name=$_POST['Name'];
    $Description=$_POST['Description'];
    $Price=$_POST['Price'];
    $Image=$_POST['image'];

    $sql="INSERT INTO qms(Name,Description,Price,Image) VALUES (:Name,Description,Price,image)";

    $insert=$conn->prepare($sql);

    $insertMovie->bindParam(':name',$name);
    $insertMovie->bindParam(':desc',$desc);
    $insertMovie->bindParam(':quality',$quality);
    $insertMovie->bindParam(':image',$image);
    $insertMovie->bindParam(':rating',$rating);

    $insertMovie->execute();

    header('Location:movies.php');
}