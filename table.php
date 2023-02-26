<?php
    $con=mysqli_connect("localhost","root","","FINAL");
    if(mysqli_connect_errno())
    {
        echo"Failed to connect to MYSql:".mysqli_connect_errno();
    }
    else{
        echo"Database Connection successfully build";
    }
    $sql="CREATE TABLE LOGIN(Firstname VARCHAR(10),Lastname VARCHAR(10),Phone_no INT)";
    if(mysqli_query($con,$sql))
    {
        echo"<br>Database Table  Login created successfully";
    }
    else{
        echo"Error creating database :".mysqli_error($con);
    }
    mysqli_close($con);
    ?>