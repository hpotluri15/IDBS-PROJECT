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
    $cond=$_GET['row'];
    $Tname=$_GET['TName'];
    if($Tname=="workdoneby"){
    $sql = " SELECT * FROM workdoneby JOIN workers ON workers.Worker_Id=workdoneby.Worker_Id WHERE workers.Worker_Id= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Worker_Id: " . $row["Worker_Id"]. "  Location_Id: " . $row["Location_Id"].   "<br>";
        
    }
  } else {
    echo "0 results";
  }
}
 if($Tname=="workers")
{
    $sql = " SELECT * FROM workers JOIN work ON workers.Worker_Id=workdoneby.Worker_Id WHERE workdoneby.Worker_Id= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Worker_Id: " . $row["Worker_Id"]. "  Type: " . $row["Type"]. "   Name: " . $row["Name"]. "   DailyWage: " . $row["Daily_wage"]. "   Location_Id:" . $row["Location_Id"].   "<br>";
    }
  } else {
    echo "0 results";
  }
}
$conn->close();
}
?>


    
   


