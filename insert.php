<?php
include('config.php');
extract($_POST);
$insert="INSERT INTO `user` (`username`, `email`, `phone_num`) VALUES ('$name', '$email', '$phone')";
$query=mysqli_query($connection,$insert);
?>