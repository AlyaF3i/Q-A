<?php


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "qa";


 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

 
 if(mysqli_connect_error()){
     die("Database connection failed ". mysqli_connect_error());
 }
 
 

?>