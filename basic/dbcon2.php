<?php
$connection = mysqli_connect("localhost","root","","database_name");
if(!$connection){
    die("failed" . mysqli_connect_error());
}
?>