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
    $tablename=$_GET['tablename'];
    $coloumnname=$_GET['coloumnname'];
    $order=$_GET['order'];
   
    
    if ($tablename=='contractor')
    {
        $sql = "SELECT AVG(No_of_Contracts),Contractor_Id FROM $tablename GROUP BY Contractor_ID ORDER BY $coloumnname $order ;";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "avgcontracts: ".$row["AVG(No_of_Contracts)"] ."    Contractor_id: " . $row["Contractor_Id"].  "<br>";
  }
} else {
  echo "0 results";
}
   }
}
$conn->close();

?>