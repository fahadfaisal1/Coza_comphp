<?php
require '../Connection_File/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $My_image = $_FILES['U_Image']['name'];
    $My_image_tmp = $_FILES['U_Image']['tmp_name'];

    // Inserting user data into the database
    move_uploaded_file($My_image_tmp, "coza_com/uimages/$My_image");
	

    $query = "INSERT INTO users (Full_Name, Email, Password, P_Number, U_Address, U_City, U_Image) 
              VALUES ('$name', '$email', '$password', '$phone', '$address', '$city', '$My_image')";
			
    if (mysqli_query($con, $query)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title p-b-26">
						Register Here
					</span>
					<!-- full name -->
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Full Name" name="name"></span>
					</div>
                    <!-- Email -->
                    <div class="wrap-input100 ">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
                    <!-- password  -->
                    <div class="wrap-input100 ">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                   <!--phone Num  -->
                    <div class="wrap-input100 ">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100" data-placeholder="Enter Your Number"></span>
					</div>
                    <!-- Address -->
                    <div class="wrap-input100 ">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Enter Your Address"></span>
					</div>
                    <!-- city -->
                    <div class="wrap-input100">
						<input class="input100" type="text" name="city">
						<span class="focus-input100" data-placeholder="City"></span>
					</div>
					<!-- my image -->
					<div class="wrap-input100">
						<label for="">Upload Your Image</label>
						<input type="file" class="form-control-file " id="product_image" name="U_Image">
					</div>
					
			<!-- Create -->

						<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
						       <button class="login100-form-btn">
							        Create 
							        </button>
						         </div>
					          </div> 
						</div>
				   </form>
			    </div>
		     </div>
	     </div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>