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
    $tochangecoloumn=$_GET['contractor'];
    $changerow=$_GET['row'];
    $Updatevalue=$_GET['updateValue'];
    $sql = " UPDATE contractor SET $tochangecoloumn = '$Updatevalue' WHERE  Contractor_Id = '$changerow' ";
$result = mysqli_query($conn,$sql);
if($result){
  echo "Record Updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
}

    
   


