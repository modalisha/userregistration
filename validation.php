<html>
<head> 
    <title> Welcome </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class ="container">
</body>

</html>

<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');


$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from usertable where username = '$username' && password = '$password'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
	while($row = mysqli_fetch_array($result))
{
	 ?>
<form action="" method="POST"  enctype="multipart/form-data">
     <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"/>
	 <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>"/>
	 <input type="text" name="phone" value="<?php echo $row['phone'] ?>"/>
	 <input type="text" name="email" value="<?php echo $row['email'] ?>"/>
	 <input type="text" name="address" value="<?php echo $row['address'] ?>"/>
	 <input type="text" name="gender" value="<?php echo $row['gender'] ?>"/>
	 <input type="hidden" name="username" value="<?php echo $row['username'] ?>"/>
	 <input type="hidden" name="password" value="<?php echo $row['password'] ?>"/>
	 <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width:250px; height: 300px;">';?>
	</form>
	<?php
}
}
else{
	header('location:login.php');
}

?>