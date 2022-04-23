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
    if($Tname=="engineer"){
    $sql = " SELECT * FROM engineer JOIN workdoneby ON workdoneby.Location_Id=engineer.Location_Id WHERE workdoneby.Location_Id= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Engineer_Id: " . $row["Engineer_Id"]. "  Engineer_Name: " . $row["Engineer_Name"]. "   Engineer_Salary: " . $row["Engineer_Salary"]. "   Engineer_Experience: " . $row["Engineer_Experience"]. "   Location_Id:" . $row["Location_Id"].   "<br>";
        
    }
  } else {
    echo "0 results";
  }
}
 if($Tname=="workdoneby")
{
    $sql = " SELECT * FROM workdoneby JOIN engineer ON workdoneby.Location_Id=engineer.Location_Id WHERE engineer.Location_Id= '$cond'" ;
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
$conn->close();
}
?>


    
   


