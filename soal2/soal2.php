<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: red;}
	</style>
	<title>Validasi</title>
</head>
<body>
	<?php 
	$usernameErr = $emailErr = $phoneErr = "";
	$username = $email = $phone = "";
	if ($_SERVER["REQUEST_METHOD"]== "POST") {
		if (empty($_POST["username"])){
			$usernameErr = "Username tidak boleh kosong!";
		}else {
			$username = Validasi($_POST["username"]);
			if (!preg_match("/^[a-z]*$/",$username)){
				$usernameErr = "username harus menggunakan huruf kecil semua dan tidak boleh terkandung spasi.";
			}
		}
		if (empty($_POST["email"])){
			$emailErr = "E-Mail tidak boleh kosong!";
		}else {
		    $email = validasi($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$email)) {
		      $emailErr = "Format E-Mail salah"; 
		    }
		  }
		  if (empty($_POST["phone"])) {
		    $phoneErr = "No Telp tidak boleh kosong!";
		  } else {
		    $phone = validasi($_POST["phone"]);
		    if (!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}$/",$phone)) {
		      $phoneErr = "No Telephon tidak valid!"; 
		    }
		  }
		}
		function validasi($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
		  	return $data;
		}

	 ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
		<span class="error"> <?php echo $usernameErr; ?></span>
		<br><br>
		<input type="text" name="email" value="<?php echo $email; ?>" placeholder="E-Mail">
		<span class="error"> <?php echo $emailErr; ?></span>
		<br><br>
		<input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="No telephone">
		<span class="error"> <?php echo $phoneErr; ?></span>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>



</body>
</html>