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
    if($Tname=="customer"){
    $sql = " SELECT * FROM customer JOIN blueprint ON blueprint.Customer_Id=customer.Customer_Id WHERE blueprint.Customer_Id= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer_Id: " . $row["Customer_Id"]. " Customer_Name: " . $row["Customer_Name"]. "   Engineer_Id: " . $row["Engineer_Id"].   "<br>";
        
    }
  } else {
    echo "0 results";
  }
}
 if($Tname=="blueprint")
{
    $sql = " SELECT * FROM blueprint JOIN customer ON blueprint.Customer_Id=customer.Customer_Id WHERE customer.Customer_Id= '$cond'" ;
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Engineer_Id: " . $row["Engineer_Id"]. "  Customer_Id: " . $row["Customer_Id"].   "<br>";
    }
  } else {
    echo "0 results";
  }
}
$conn->close();
}
?>


    
   


