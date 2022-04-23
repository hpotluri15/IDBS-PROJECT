<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_contract_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['submit'])){
    $E_ID=$_GET['EngineerId'];
    $C_ID=$_GET['CustomerID'];
   

$sql = "INSERT INTO blueprint VALUES ('$E_ID','$C_ID')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

