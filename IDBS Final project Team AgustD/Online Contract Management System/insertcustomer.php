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
    $custumer_ID=$_GET['CustomerID'];
    $Customer_Name=$_GET['name'];
    $Engineer_ID=$_GET['E_ID'];
    

$sql = "INSERT INTO customer VALUES ('$custumer_ID','$Customer_Name','$Engineer_ID')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

