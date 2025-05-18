<?php
include_once('config.php');

if(isset($_POST['submit1'])){
    $id=$_POST['id'];
    $Name=$_POST['Name'];
    $Descriptiom=$_POST['Description'];
    $Price=$_POST['Price'];
    $Image=$_POST['Image'];

    $sql="UPDATE qms SET Name=:Name,Description=:Description,Price=:Price,Image=:Image";

    
    $prep->bindParam(':Name',$Name);
    $prep->bindParam(':Description',$Descriptiom);
    $prep->bindParam(':Price',$Price);
    $prep->bindParam(':Image',$Image);

    $prep->execute();
    header('Location:home.php');

}

?>