<?php
include('connection.php');

if(isset($_POST["submit"]))
	{
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$contactno =$_POST['contactno'];
	$address =$_POST['address'];
	$email=$_POST['email'] ;
  $taluk=$_POST['taluk'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$conformpassword =$_POST['confirmpassword'];
    // $Qualification =implode(',',$Qualification);
    
   /* mysqli_query($con,"INSERT INTO `cattlelogin`(`password`) VALUES ($password)");
    echo"INSERT INTO `cattlelogin`(`password`) VALUES ($password)";*/
        /*$login_id=mysqli_insert_id($con);*/
    mysqli_query($con,"INSERT INTO `cattleregistration`(`firstname`, `lastname`, `address`, `taluk`, `email`, `contactno`, `username`, `password`, `confirmpassword`) VALUES ('$firstname','$lastname','$address','$taluk','$email','$contactno','$username','$password','$conformpassword')");
   /*echo $Name."<br>".$Email."<br>".$Gender."<br>". $Mobile."<br>". $file."<br>". $District."<br>". $Username."<br>". $Username."<br>". $Password."<br>". $Qualification."<br>";*/
}

?>


<html>
<body>
<form method="POST" enctype="multipart/form-data">
   
  <labe1 for="firstname">firstname: </label>
<input type="text" id="firstname" name=" firstname"><span id='sp1'style="color:red"></span><br>




<br>
   <labe1 for=" lastname">lastname: </label>
<input type ="text" id=" lastname"name="lastname"><span id='sp2'style="color:green"></span>
<br><br>

<labe1 for=" address">address: </label>
 <input type ="text" id=" address"name="address"><span id='sp2'style="color:green"></span><br>
<br>

<labe1 for=" address">taluk </labe1>
    <select name="taluk "> 
  <option value="bathery">bathery</option>
  <option value="vythri">vythri</option>
  <option value="manathavady">manathavady</option>
  
<input type ="text" id=" address"name="taluk"><span id='sp2'style="color:green"></span><br> 
<br>

<labe1 for="email">email: </label>
	 <input type ="text" id=" email"name="email"><span id='sp2'style="color:green"></span><br><br>

<labe1 for="contactno">contactno</labe1>
		<input type="contactno" id="contactno" name="contactno"><span id='sp3'style="color:red"></span><br><br>

	
	  
		  <labe1 for=" username">Username: </label>
<input type="text" id="username" name="username"><span id='sp4'style="color:red"></span><br><br>


	  
<labe1 for=" password">Password: </label>
<input type=" password" name="password" id="password"><span id='sp5'style="color:red"></span><br><br>

<labe1 for=" conformpassword">confirmpassword: </label>
   <input type ="confirmpassword" id="confirmpassword"name=" confirmpassword"><span id='sp2'style="color:green"></span>
	<br><br>

<input type="submit" value="Register" onclick="return valid();" name="submit" 
 style="padding;8px;margin-top:10px";>
</br><br>



</form>
</body>
</html>

<script type="text/javascript">
	function valid()
	{ 



	 var firstname = document.getElementById('firstname').value;
	 var lastname = document.getElementById('lastname').value;
	 // var gender = document.getElementsByname('gender');
	 var address = document.getElementById('address').value;
	 var taluk = document.getElementById('taluk').value;
	 var email = document.getElementById('email').value;
	 var contactno = document.getElementById('contactno').value;
	 
   var username = document.getElementById('username').value;
   var password = document.getElementById('password').value;
   var confirmpassword = document.getElementById('confirmpassword').value;
	  // var qualification = document.getElementsByname('Qualification[]');

	  if(firstname=="")
      {
      	document.getElementById('sp1').innerHTML="firstname required";
      	//alert("name required");
      		return false;

          if(lastname=="")
      {
        document.getElementById('sp2').innerHTML="lastname required";
        //alert("name required");
          return false;
      }

    if(address=="")
      {
        document.getElementById('sp3').innerHTML="address required";
        //alert("name required");
          return false;  
        }
        if(taluk=="")
      {
        document.getElementById('sp4').innerHTML="taluk required";
        //alert("name required");
          return false;
        }
     if(email==""||email.indexOf('@')==-1||email.indexOf('.')==-1)
     { document.getElementById('sp5').innerHTML="email required";
     	//alert("email not specified")
     	return false;
     }
      // if(gender=="")
      // {
      // 	alert("name required");
      // 		return false;
      // }
      if(contactno==""|| isNaN(contactno)||contactno.length<10)
      {document.getElementById('sp6').innerHTML="contactno required";
       	//alert("phone number required");
       		return false;
      }
      //if(file=="")
      //{//document.getElementById('sp4').innerHTML="file required";
      
      
      //
      if(loginid=="")
      {
        document.getElementById('sp7').innerHTML="loginid required";
        //alert("name required");
          return false;
        }
       if(username=="")
      {document.getElementById('sp8').innerHTML="username required";
      	//alert("username required");
      		return false;
      }
      // if(district=="")
     // {
      	//alert("district unknown");
      		return false;
      //}
       if(password=="")
      {document.getElementById('sp9').innerHTML="password required";
      	//alert("pasword required");
      		return false;
      }
      if(confirmpassword=="")
      {
        document.getElementById('sp10').innerHTML="confirmpassword required";
        //alert("name required");
          return false;
        }
      //  if(qualification=="")
      // {
      // 	alert("name required");
      // 		return false;
      // }
  }

	  
</script>
