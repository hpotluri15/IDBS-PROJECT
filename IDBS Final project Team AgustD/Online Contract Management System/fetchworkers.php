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
    
    $sql = " SELECT * from workers ";
$result = $conn->query($sql);

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
?>

    
   


