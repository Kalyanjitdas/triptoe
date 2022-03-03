<?php
include'../dbcon.php';
$id = $_GET['id'];
$selectquery = "delete from uttarakhand where place_id = $id";
mysqli_query($con,$selectquery);
header('Location: editplaces.php');
?>