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
    if($Tname=="work"){
    $sql = " SELECT * FROM work JOIN contractor ON contractor.Location_ID=work.Location_Id WHERE contractor.Location_ID= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Location_Id: " . $row["Location_Id"]. "  Work_Location: " . $row["Work_Location"]. "   Type: " . $row["Type"]. "   Start_Date: " . $row["Start_Date"]. "   End_Date:" . $row["End_Date"]. "   Engineer_Id: " . $row["Engineer_Id"].  "<br>";
        
    }
  } else {
    echo "0 results";
  }
}
 if($Tname=="contractor")
{
    $sql = " SELECT * FROM contractor JOIN work ON contractor.Location_ID=work.Location_Id WHERE work.Location_Id= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Contractor_id: " . $row["Contractor_Id"]. "  Name: " . $row["Contractor_Name"]. "   No_of_Workers: " . $row["No_of_Workers"]. "   No_of_Contracts: " . $row["No_of_Contracts"]. "   Customer_ID:" . $row["Customer_ID"]. "   Location_ID: " . $row["Location_ID"].  "<br>";
    }
  } else {
    echo "0 results";
  }
}
$conn->close();
}
?>


    
   


