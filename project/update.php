<?php
include_once('config.php');

if(isset($_POST['submit1'])){
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];  
    $Price = $_POST['Price'];
    $Image = $_POST['Image'];

    
    $sql = "UPDATE qms SET Name = :Name, `Desc` = :Desc, Price = :Price, Image = :Image WHERE id = :id";

    
    $prep = $conn->prepare($sql);

    
    $prep->bindParam(':Name', $Name);
    $prep->bindParam(':Desc', $Desc);
    $prep->bindParam(':Price', $Price);
    $prep->bindParam(':Image', $Image);
    $prep->bindParam(':id', $id);

   
    $prep->execute();

   
    header('Location:home.php');
    exit;
}
?>
