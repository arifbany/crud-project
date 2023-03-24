<?php
//add database
$con = new mysqli('localhost', 'root', '', 'curdoperation');

//condition checking
if (!$con) {

 die(mysqli_error($con));
} 
?>