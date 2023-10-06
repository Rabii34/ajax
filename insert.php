<?php
include('config.php');
extract($_POST);
$insert="INSERT INTO `user` (`username`, `email`, `phone_num`) VALUES ('$username', '$email', '$phone_num')";
$query=mysqli_query($connection,$insert);
?>