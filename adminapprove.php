<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<?php
	  include("connection.php");
	  
	  ?>
	  
<body>

<form id="form1" method="post" action="">
  <table width="581" height="111" border="1">
    <tr>
      <td width="37">firstname</td>
      <td width="51">lastname</td>
      <td width="64">contactno</td>
      <td width="37">address</td>
      <td width="45">email</td>
      <td width="55">taluk</td>
	    <td width="37"><strong>Approve/Reject</strong></td>
	
     
    </tr>
</body>
</html>

<?php
	
	$r=mysql_query("select user.* from userform_db,tbl_user_login where tbl_user_login.type='pending' and login_id=user.lid");
	
	if(mysql_num_rows($r)>0)
	{
	
	 while($row=mysql_fetch_array($r))
	 
	 {
	 
	
	
	?>
    
    <tr>
      <td height="61"><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[3] ?></td>
      <td><?php echo $row[4] ?></td>
      <td><?php echo $row[5] ?></td>
      <td><?php echo $row[6] ?></td>
	   <td><p><a href="userapprove.php?id=<?php echo $row[7] ?>">Approve</a></p>
      <p><a href=" userreject.php?id=<?php  echo $row[7] ?>">Reject</a></p></td>
    </tr>


<?php
	}
	}
	
	
	?>
	