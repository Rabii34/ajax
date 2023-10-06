<?php
include('config.php');
$fetch="SELECT * FROM user";
$con=mysqli_query($connection,$fetch);
if(mysqli_num_rows($con)>0){
    while($row=mysqli_fetch_assoc($con)){
        echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['username'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['phone_num'].'</td>
        </tr>';
    }
}
?>