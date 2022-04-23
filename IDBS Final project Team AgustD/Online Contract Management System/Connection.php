<?php
    
    $con = new mysqli('localhost','root','','online_contract_management_system');
    if(!$con)
    {
        die(mysqli_error($con));
        
    }

?>