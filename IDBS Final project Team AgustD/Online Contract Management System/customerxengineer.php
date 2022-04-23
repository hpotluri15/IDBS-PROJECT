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
    $sql = " SELECT * FROM engineer JOIN customer ON customer.Engineer_Id=engineer.Engineer_Id WHERE customer.Engineer_Id= '$cond'" ;
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
 if($Tname=="customer")
{
    $sql = " SELECT * FROM customer JOIN engineer ON customer.Engineer_Id=engineer.Engineer_Id WHERE engineer.Engineer_Id= '$cond'" ;
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
$conn->close();
}
?>


    
   


