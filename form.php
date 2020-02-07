<?php
include('connection.php');

if(isset($_POST["submit"]))
	{
	$Name =$_POST['Name'];
	$Email =$_POST['Email_id'];
	$Gender =$_POST['gender'];
	$Mobile =$_POST['Mobile'];
	$file =$_FILES['upload']['name'];
	$District =$_POST['Districtid'];
	$Username =$_POST['Username'];
	$Password =$_POST['User-Pwd'];
	$Qualification =$_POST['qualification'];
    $Qualification =implode(',',$Qualification);
    
    mysqli_query($con,"INSERT INTO `tbl_user_login`(username, password) VALUES ('$Username','$Password')");
    $login_id=mysqli_insert_id($con);
    mysqli_query($con,"INSERT INTO`regiister`(login_id, name, email, mobile, district, gender, file) VALUES ('$login_id','$Name','$Email','$Mobile','$District','$Gender','$file')");
   /*echo $Name."<br>".$Email."<br>".$Gender."<br>". $Mobile."<br>". $file."<br>". $District."<br>". $Username."<br>". $Username."<br>". $Password."<br>". $Qualification."<br>";*/
}

?>


<html>
<body>
<form method="POST" enctype="multipart/form-data">
  Name:<br>
<input type="text" id="name" name="Name"><span id='sp1'style="color:red"></span>



<br>
   Email id:<br>
<input type ="text" id="email"name="Email_id"><span id='sp2'style="color:green"></span>
<br>
Gender
 <input type="radio" value="male" name="gender" >
<labe1 for="male"  >Male</label>
<input type="radio" value="female" name="gender" >
<labe1 for="female" >Female</label>

<input type="radio" value="other" name="gender" >
<labe1 for="other" >Other</label><br>
		<labe1 for="District" id="district">District:</labe1>
		<select name="Districtid">
	<option value="Kozhikode">Kozhikode</option>
	<option value="Wayanad">Wayanad</option>
	<option value="Kannur">Kannur</option>
	<option value="Thrissur">Thrissur</option>
</select><br>
<labe1 for="Mobile">Mobile</labe1>
		<input type="tel" id="Mobile" name="Mobile"><span id='sp3'style="color:red"></span><br>
	
	<labe1>Photo:</labe1>
	<input type="file" name="upload" id="fileselect"><br>
		  Username:
<input type="text" id="username" name="Username"><span id='sp4'style="color:red"></span>

	  
<labe1 for="User-Password">Password: </label>
<input type="Password" name="User-Pwd" id="password"><span id='sp5'style="color:red"></span><br>

        Qualification
	 
	
	<input type="checkbox" value="Plus2"name="qualification[]" >plus2
	<label for="Plus2">Plus2</label>
	  

      <input type="checkbox" value="Degree" name="qualification[]" >Degree
	<label for="Degree">Degree</label>
	  
       <input type="checkbox" value="Net"name="qualification[]" >Net
	<label for="Net">Net</label>
	<br>
<input type="submit" value="Register" onclick="return valid();" name="submit" 
 style="padding;8px;margin-top:10px";>
</br>


</form>
</body>
</html>

<script type="text/javascript">
	function valid()
	{ 



	 var name = document.getElementById('name').value;
	 var email = document.getElementById('email').value;
	 // var gender = document.getElementsByname('gender');
	 var mobile = document.getElementById('Mobile').value;
	 var file = document.getElementById('fileselect').value;
	 var district = document.getElementById('district').value;
	 var username = document.getElementById('username').value;
	 var password = document.getElementById('password').value;
	  // var qualification = document.getElementsByname('Qualification[]');

	  if(name=="")
      {
      	document.getElementById('sp1').innerHTML="name required";
      	//alert("name required");
      		return false;
      }
     if(email==""||email.indexOf('@')==-1||email.indexOf('.')==-1)
     { document.getElementById('sp2').innerHTML="email required";
     	//alert("email not specified")
     	return false;
     }
      // if(gender=="")
      // {
      // 	alert("name required");
      // 		return false;
      // }
      if(mobile==""|| isNaN(mobile)||mobile.length<10)
      {document.getElementById('sp3').innerHTML="mobile required";
       	//alert("phone number required");
       		return false;
      }
      if(file=="")
      {//document.getElementById('sp4').innerHTML="file required";
      
      
      	alert("file required");
      		return false;
      }
       if(username=="")
      {document.getElementById('sp4').innerHTML="username required";
      	//alert("username required");
      		return false;
      }
       if(district=="")
      {
      	alert("district unknown");
      		return false;
      }
       if(password=="")
      {document.getElementById('sp5').innerHTML="password required";
      	//alert("pasword required");
      		return false;
      }
      //  if(qualification=="")
      // {
      // 	alert("name required");
      // 		return false;
      // }
  }

	  
</script>
