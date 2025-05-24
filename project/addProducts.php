<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $qms=$_POST['Name'];
    $qms=$_POST['Description'];
    $qms=$_POST['Price'];
    $qms=$_POST['image'];

    $sql="INSERT INTO qms(Name,Description,Price,Image) VALUES (:Name,Description,Price,image)";

    $insert=$conn->prepare($sql);

    $insertqms->bindParam(':Name',$Name);
    $insertqms->bindParam(':Description',$Description);
    $insertqms->bindParam(':Price',$Price);
    $insertqms->bindParam(':Image',$Image);

    $insertMovie->execute();

    header('Location:movies.php');
}