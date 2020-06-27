<html>
<head> 
    <title> User Login And Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="login-box"
    <div class ="row">
	<div class="col-md-6 login-left">
	<h2> Login(Existing user) </h2>
	<form action="validation.php" method="post">
	<div class="form-group">
	<label>Username</label>
	<input type="text" name="username" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" class="form-control" required>
	</div>
	<button type="submit" class="btn btn-primary"> Login </button>
	</form>
	</div>
	
	
	
	<div class="col-md-6 login-right">
	<h2> Signup (New User)</h2>
	<form action="registration.php" method="post" enctype="multipart/form-data"">
	<div class="form-group">
	<label>FirstName</label>
	<input type="text" name="firstname" class="form-control" required>
	</div>
	<div class="form-group">
	<label>LastName</label>
	<input type="text" name="lastname" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Phone</label>
	<input type="text" name="phone" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
	<label>Address</label>
	<input type="text" name="address" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Gender</label>
	<input type="radio" name="gender" class="form-control" value="Male">Male
	<input type="radio" name="gender" class="form-control" value="Female">Female
	<input type="radio" name="gender" class="form-control" value="Others">Others
	</div>
	
	<div>
	<label>Upload your photo(JPG,JPEG,PNG format) </label>
	<input type="file" name="image" id="image" required>
	</div>
	<div>
	<label>Upload KYC Document(JPG,JPEG,PNG,PDF format) </label>
	<input type="file" name="kyc" id="kyc" required>
	</div>
	
	
	<div class="form-group">
	<label>username</label>
	<input type="text" name="username" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" class="form-control" required>
	</div>
	<button type="submit" class="btn btn-primary"> Register </button>
	</form>
	</div>
	</div>
	
	</div>
	
	

</div>
</body>
</html>