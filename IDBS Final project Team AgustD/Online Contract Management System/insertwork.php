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
    $ID=$_GET['LocationID'];
    $WorkLocation=$_GET['W_location'];
    $Type=$_GET['Type'];
    $StartDate=$_GET['startDate'];
    $End_Date=$_GET['EndDate'];
    $Engineer_ID=$_GET['EngineerID'];

$sql = "INSERT INTO work VALUES ('$ID','$WorkLocation','$Type','$StartDate',' $End_Date','$Engineer_ID')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

