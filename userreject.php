<?php
include("connection.php");
$id=$_GET["id"];
mysql_query("update login set type='reject' where id='$id'");
header("location:adminapprove.php");
?>