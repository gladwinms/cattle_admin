<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['user_id']))
{header('location:login.php');}

$login_id=$_SESSION["user_id"];

$array_data = mysqli_query($con,"SELECT * FROM `regiister` WHERE login_id = '$login_id'
");
$user_details= mysqli_fetch_assoc($array_data);




?>



<html>
<head>
<title>form</title>
</head>
<body>
<form method="post">
<table border="1">
<tr>
<td>Name:</td>
<td><?php echo $user_details['name'];?>	 </td>
</tr>

<tr>
<td>Email:</td>
<td><?php echo $user_details['email'];?></td> 
</tr>

<tr>
<td>Gender:</td>
<td><?php echo $user_details['gender'];?> </td>
</tr>

<tr>
<td>District:</td>
<td><?php echo $user_details['district'];?> </td>

</tr>

<tr>
<td>mob no:</td>
<td><?php echo $user_details['mobile'];?> </td>

</tr>

<tr>
<td>photo:</td>
<td><?php echo $user_details['file'];?> </td>

</tr>

 

<tr>
<td>Username:</td>
<td> </td>

</tr>

<tr>
<td>Password:</td>
<td> </td>
</tr>

</table>
<a href="logout.php">LOGOUT</a>
</form>
</body>
</html>
