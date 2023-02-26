<?php
 $con=mysqli_connect("localhost","root","","FINAL");
 if(mysqli_connect_errno())
 {
     echo"Failed to connect to MYSql:".mysqli_connect_errno();
 }
 else{
     echo"Database Connection successfully build";
 }
$fn=$_POST["firstname"];
$ln=$_POST["lastname"];
$ph=$_POST["phone"];

$sql="INSERT INTO LOGIN(Firstname,Lastname,Phone_no) VALUES('$fn','$ln','$ph')";
if(mysqli_query($con,$sql)){
    echo"<br>row inserted";}
    else{}
    ?>