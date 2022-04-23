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
    
    $action=$_GET['action'];
    switch($action)
    {
        case 'Groupby':
            echo '<div id="Groupby">
            <form method="GET" action="Groupby.php">
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="tablename" placeholder="Tablename"><br><br>
            <div> <p><b> Enter the new value you want the data to be grouped by: </b></p></div>
            <input type="text" name="Value" placeholder="Group by ID"><br><br>
            <input type="submit" name="submit" value="Submit">
            </form>
            </div>';
            break;

        case 'Orderby':
            echo '<div id="Groupby">
            <form method="GET" action="Orderby.php">
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="tablename" placeholder="Tablename"><br><br>
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="coloumnname" placeholder="Coloumn Name"><br><br>
            <input type="text" name="order" placeholder="ASC/DESC"><br><br>
            <input type="submit" name="submit" value="Submit">
            </form>
            </div>';
            break;

        case 'Groupby,Orderby':
            '<div id="Groupby">
            <form method="GET" action="GroupbyxOrderby.php">
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="tablename" placeholder="Tablename"><br><br>
            <div> <p><b> Enter the new value you want the data to be grouped by: </b></p></div>
            <input type="text" name="Value" placeholder="Group by ID"><br><br>
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="coloumnname" placeholder="Coloumn Name"><br><br>
            <input type="text" name="order" placeholder="ASC/DESC"><br><br>
            <input type="submit" name="submit" value="Submit">
            </form>
            </div>';
            
            break;

        case 'Having':
            echo '<div id="Groupby">
            <form method="GET" action="Having.php">
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="tablename" placeholder="Tablename"><br><br>
            <div> <p><b> Enter the new value you want the data to be grouped by: </b></p></div>
            <input type="text" name="Value" placeholder="Group by ID"><br><br>
            <div> <p><b> Enter the Having count: </b></p></div>
            <input type="text" name="having" placeholder="HavingCount"><br><br>
            <input type="submit" name="submit" value="Submit">
            </form>
            </div>';
             break;

        case 'Groupby,Having,Orderby':
            '<div id="Groupby">
            <form method="GET" action="GroupbyxHaving.php">
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="tablename" placeholder="Tablename"><br><br>
            <div> <p><b> Enter the new value you want the data to be grouped by: </b></p></div>
            <input type="text" name="Value" placeholder="Group by ID"><br><br>
            <div> <p><b> Enter the Having count: </b></p></div>
            <input type="text" name="having" placeholder="HavingCount"><br><br>
            <div> <p><b> Enter the Below Data </b></p></div>
            <input type="text" name="coloumnname" placeholder="Coloumn Name"><br><br>
            <input type="text" name="order" placeholder="ASC/DESC"><br><br>
            <input type="submit" name="submit" value="Submit">
            </form>
            </div>';
            
             break;
           
    

    }
    
 
}
$conn->close();

?>


    
   


