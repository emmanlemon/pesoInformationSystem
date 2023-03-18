<?php
 	$name= "localhost"; //hostname
     $username= "root"; //username
     $password= ""; //password
     $db_name= "db_jobportal";

     $conn = mysqli_connect($name, $username, $password, $db_name);

     $db = mysqli_connect("localhost", "root", "", "db_jobportal"); 

     if (!$conn) {
         echo "Connection failed!";
     }