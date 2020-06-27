<?php

session_start();
//header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$kyc = addslashes(file_get_contents($_FILES["kyc"]["tmp_name"]));

    $size =$_FILES['kyc']['size'];
	
    $file_extension= explode(".", $_FILES['image']['name']);
    $file_extension= strtolower(end($file_extension));
	$kyc_file_extension= explode(".", $_FILES['kyc']['name']);
    $kyc_file_extension= strtolower(end($kyc_file_extension));


$s = " select * from usertable where username = '$username'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" UserName Already exist";
}
else{
	
	if 
	($size<=5000000) 
	{
		if($file_extension == "jpg" || $file_extension == "jpeg" || $file_extension == "png" )
		{
		    if($kyc_file_extension == "jpg" || $kyc_file_extension == "jpeg" || $kyc_file_extension == "png" || $kyc_file_extension == "pdf" )			
			{
	$reg= "insert into usertable(firstname,lastname,phone,email,address,gender,username,password,image,kyc) values ('$fname', '$lname', '$phone', '$email', '$address', '$gender', '$username', '$password', '$file', '$kyc')";
	
    mysqli_query($con, $reg);
    echo" Registration Successsful";
	        }
			 
		     else{echo"Allowed extension for KYC are jpg,jpeg,pdf and png ";}
		}
		
		else{echo"Allowed extension for photo are jpg,jpeg and png ";}
	 
		  
	}
	else{
		echo"KYC document size should not exceed 5MB ";
	}

	
	  
	
}
?>