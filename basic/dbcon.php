<?php
$connection = mysqli_connect("localhost","root","","crud_operation");

if(!$connection){
    die("connection fail" . mysqli_connect_errno());
}
?>