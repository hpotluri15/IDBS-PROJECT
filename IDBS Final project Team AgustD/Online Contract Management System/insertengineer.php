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
    $ID=$_GET['EngineerID'];
    $name=$_GET['name'];
    $Workers=$_GET['Salary'];
    $Exp=$_GET['exp'];
    $ID=$_GET['LocationID'];
   

$sql = "INSERT INTO engineer VALUES ('$ID','$name','$Workers','$Exp','$ID')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

