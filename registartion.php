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

    /*$sql = "INSERT INTO registration (Name, Password, EmailID,Gender) VALUES ('$Name', '$Password', '$EmailID, $Gender')";
    Unfortunatly, this command did not work on my laptop*/

    $stmt = $conn->prepare("insert into registration(Name, Password, EmailID, Gender) values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name, $password,$EmailID,$Gender);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close(); 
}

if(!filter_var($EmailID, FILTER_VALIDATE_EMAIL)){
    echo "Please enter a valid email adress!";
}
if(ctype_alpha($Name) === false){
    echo "Your name must contain only letters";
}
?>
