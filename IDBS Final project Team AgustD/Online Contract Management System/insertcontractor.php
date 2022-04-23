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
    $con_ID=$_GET['ContractorID'];
    $Con_Name=$_GET['Contractorname'];
    $NWorkers=$_GET['Workers'];
    $NContracts=$_GET['No_ofContracts'];
    $Cust_ID=$_GET['CustomerId'];
    $LocID=$_GET['LocationID'];

$sql = "INSERT INTO contractor VALUES ('$con_ID','$Con_Name','$NWorkers','$NContracts','$Cust_ID','$LocID')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

