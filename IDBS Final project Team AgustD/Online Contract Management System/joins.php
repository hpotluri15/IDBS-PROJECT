<?php

if(isset($_GET['submit'])){
    $Tablef=$_GET['tablef'];
    $Tables=$_GET['tables'];
    if (($Tablef=="contractor" and $Tables=="customer") or ($Tables=="contractor" and $Tablef=="customer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="contractorxcustomer.php">
    <br><br>
    
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
  <input type="text" name="row" placeholder="CustomerID"><br><br>
  <input type="submit" name="submit" value="Submit">
  </form>
  </div>';
    }

    else if (($Tablef=="contractor" and $Tables=="blueprint") or ($Tables=="contractor" and $Tablef=="blueprint") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="contractorxblueprint.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
  <input type="text" name="row" placeholder="CustomerID"><br><br>
  <input type="submit" name="submit" value="Submit">
  </form>
  </div>';
    }

    else if (($Tablef=="contractor" and $Tables=="engineer") or ($Tables=="contractor" and $Tablef=="engineer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="contractorxengineer.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
  <input type="text" name="row" placeholder="LocationID"><br><br>
  <input type="submit" name="submit" value="Submit">
  </form>
  </div>';
    }

    else if (($Tablef=="work" and $Tables=="contractor") or ($Tables=="work" and $Tablef=="contractor") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="contractorxwork.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="LocationID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="contractor" and $Tables=="workdoneby") or ($Tables=="contractor" and $Tablef=="workdoneby") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="contractorxworkdoneby.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="LocationID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }

    else if (($Tablef=="workers" and $Tables=="contractor") or ($Tables=="workers" and $Tablef=="contractor") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="contractorxworkers.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
  <input type="text" name="row" placeholder="LocationID"><br><br>
  <input type="submit" name="submit" value="Submit">
  </form>
  </div>';
    }
    else if (($Tablef=="customer" and $Tables=="blueprint") or ($Tables=="customer" and $Tablef=="blueprint") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="customerxblueprint.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="CustomerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="engineer" and $Tables=="blueprint") or ($Tables=="engineer" and $Tablef=="blueprint") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="engineerxblueprint.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="EngineerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="work" and $Tables=="blueprint") or ($Tables=="work" and $Tablef=="blueprint") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workxblueprint.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="EngineerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="customer" and $Tables=="engineer") or ($Tables=="customer" and $Tablef=="engineer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="customerxengineer.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="EngineerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="work" and $Tables=="customer") or ($Tables=="work" and $Tablef=="customer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="customerxwork.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="engineerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="work" and $Tables=="engineer") or ($Tables=="work" and $Tablef=="engineer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workxengineer.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="EngineerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="workdoneby" and $Tables=="engineer") or ($Tables=="workdoneby" and $Tablef=="engineer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workdonebyxengineer.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="LocationID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="workers" and $Tables=="engineer") or ($Tables=="workers" and $Tablef=="engineer") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workersxengineer.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="LocationID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="work" and $Tables=="workdoneby") or ($Tables=="work" and $Tablef=="workdoneby") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workxworkdoneby.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
    <input type="text" name="TName" placeholder="TableName"><br><br>
    <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="LocationID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="work" and $Tables=="workers") or ($Tables=="work" and $Tablef=="workers") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workxworkers.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="LocationID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }
    else if (($Tablef=="workers" and $Tables=="workdoneby") or ($Tables=="workers" and $Tablef=="workdoneby") )
    {
    echo '<div id="customerxcontractor" class="data">
    <form method="GET" action="workersxworkdoneby.php">
    <br><br>
    <div> <p><b> Enter the Tablename you want the data from: </b></p></div>
  <input type="text" name="TName" placeholder="TableName"><br><br>
  <div> <p><b> Enter the below data: </b></p></div>
    <input type="text" name="row" placeholder="WorkerID"><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>';
      }

      else{
        echo "No Dependency Exists";
      }
    
}


?>

