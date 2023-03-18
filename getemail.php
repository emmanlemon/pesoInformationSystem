<?php
require_once ("include/db_connection.php");
$emailAddress = $_GET['q'];
$sql = "SELECT * FROM tblapplicants WHERE EMAILADDRESS ='$emailAddress' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "This Email is Already Taken. Try another";
}else{
    echo " ";
}