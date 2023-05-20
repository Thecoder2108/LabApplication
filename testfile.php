<?php
$Name = $_POST['Name'];
$Password = $_POST['Password'];
$EmailID = $_POST['EmailID'];
$Gender = $_POST['Gender'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die('Connection failed' .$conn->connect_error);
}
else
{
    /*$sql = "INSERT INTO registration (Name, Password, EmailID) VALUES ('$Name', '$Password', '$EmailID')";*/
    $stmt = $conn->prepare("insert into registration(Name, Password, EmailID, Gender) values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name, $password,$EmailID,$Gender);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close(); 
}
?>
