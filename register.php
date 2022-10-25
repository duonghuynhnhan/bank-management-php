<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$type = $_POST['type'];

 	if($type == "Admin"){
 		if ($password == $cpassword) {
			$sql = "SELECT * FROM ADMIN_ACCOUNT WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			if (!$result->num_rows > 0) {
				$sql = "INSERT INTO ADMIN_ACCOUNT (username, email, password)
						VALUES ('$username', '$email', '$password')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					echo "<script>alert('Wow! Admin Registration Completed.')</script>";
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Something Wrong Went.')</script>";
				}
			} else {
				echo "<script>alert('Woops! Email Already Exists.')</script>";
			}
		} else {
			echo "<script>alert('Password Not Matched.')</script>";
		}
 	}else{
 		if ($password == $cpassword) {
			$sql = "SELECT * FROM USER_ACCOUNT WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			if (!$result->num_rows > 0) {
				$sql = "INSERT INTO USER_ACCOUNT (username, email, password)
						VALUES ('$username', '$email', '$password')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					echo "<script>alert('Wow! User Registration Completed.')</script>";
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Something Wrong Went.')</script>";
				}
			} else {
				echo "<script>alert('Woops! Email Already Exists.')</script>";
			}
		} else {
			echo "<script>alert('Password Not Matched.')</script>";
		}
 	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="./css/style_login_regist.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-accnum">
			<div style="padding-left: 89px;">
				<a href="./index.html"><img src="./images/logo.ico" width="150px"></a>
			</div>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div style="margin-bottom: 25px; font-size: 20px;">
				<input type="radio" placeholder="Type" name="Type" id="Type" value="Admin" <?php echo ($type== 'Admin') ?  "checked" : "" ;  ?> required>Admin    
                <input type="radio" placeholder="Type" name="Type" id="Type" value="User" <?php echo ($type== 'User') ?  "checked" : "" ;  ?> required>User
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>