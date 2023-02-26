<?php
    $con=mysqli_connect("localhost","root","","MYSQL");
    if(mysqli_connect_errno())
    {
        echo"Failed to connect to MYSql:".mysqli_connect_errno();
    }
    else{
        echo"Database Connection successfully build";
    }
    $sql="CREATE DATABASE FINAL";
    if(mysqli_query($con,$sql))
    {
        echo"<br>Database Final created successfully";
    }
    else{
        echo"Error creating database :".mysqli_error($con);
    }
    mysqli_close($con);
    ?>