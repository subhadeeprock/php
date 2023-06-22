<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conn = new mysqli('localhost' ,'root','','test');
if($conn->connect_error)
{
    die('Connection Failed :' .$conn->connection_error);
}
else
{
    $stmt = $conn->prepare("Insert into registration(name,email,password)values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$password);
    $stmt->execute();
    echo "registration done............";
    $stmt->close();
    $conn->close();
}

?>