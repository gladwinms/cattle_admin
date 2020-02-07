
<?php
include 'connection.php';
$user_id=$_GET['user_id'];

$query=mysqli_query($con,"UPDATE stdfac_tb SET approval_status='1' WHERE user_id='$user_id'");
echo"<script> alert('succussfully approved');</script>";
echo"<script> window.location='remove.php';</script>";

?>