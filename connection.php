<?php

$name = $_POST['name'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$previous_class = $_POST['previous_class'];
$email = $_POST['email'];
$fphone = $_POST['fphone'];
$dob = $_POST['dob'];


	
$conn= new mysqli('localhost','root','','user');
if(isset($_POST['submit']))
{
	if($conn->connect_error)
	{
		die("Connect Error : ".$conn->connect_error);

	}

	else
	{
		
		$INSERT="INSERT INTO students(name,fname,mname,gender,class,previous_class,email,fphone,dob) values('$name' , '$fname' , '$mname' , '$gender' , '$class' , $previous_class , '$email' , '$fphone' , '$dob')";

		$run=mysqli_query($conn,$INSERT) or die(mysqli_error());
		if($run)
		{
		echo "New record inserted successfully";
		}

		else{
			
		}
		
		$conn->close();
	}

}

?>