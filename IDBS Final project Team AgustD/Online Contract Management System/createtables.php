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
    $Tablename=$_GET['tablename'];
    $coloumns=$_GET['no_of_Coloumns'];
    for($x = 0; $x <  $coloumns; $x++) {
        echo <input type="text" name="no_of_Coloumns" placeholder="coloumn name:">;
        echo <input type="text" name="type" placeholder="coloumn type:"
      }
    
    //$sql = " CREATE TABLE '$Tablename'( ) ";
$result = mysqli_query($conn,$sql);
if($result){
  echo "Record Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
}