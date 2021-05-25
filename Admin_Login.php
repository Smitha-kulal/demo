<?php

 $uname = $_POST['uname'];
 $pword = $_POST['pword'];
 
$con= new mysqli("sql6.freesqldatabase.com","sql6414256","HPAdV5nHNn","sql6414256");
 if($con->connect_error)
 {
	 die("Failed to Connect : ".$con->connect_error);
 }
 else
 {
	 $stmt= $con->prepare("select * from admin where Username= ?");
	 $stmt->bind_param("s",$uname);
	 $stmt->execute();
	 $stmt_result= $stmt->get_result();
	 if($stmt_result->num_rows>0)
	 {
		 $data=$stmt_result->fetch_assoc();
		 if($data['Password']===$pword)
		 {
			 echo "<script>window.open('Admin_Page1.html','_self')</script>";
		 }
		 else
		 { 
		    echo "<script>window.alert('Invalid Username or Password!')
window.open('Admin_Login.html','_self')</script>";
		 }
	 }
	else
	{
		echo "<script>window.alert('Invalid Username or Password!')
window.open('Admin_Login.html','_self')</script>";
	}
 }
	
?>