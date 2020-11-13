<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Moderna Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../environment/assets/img/favicon.png" rel="icon">
  <link href="../environment/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../environment/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../environment/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../environment/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../environment/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../environment/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../environment/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../environment/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../environment/assets/css/style.css" rel="stylesheet">
  
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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

  <!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php
 require_once('connectvars.php');

  // Start the session
  session_start();

  // Clear the error message
  $error_msg = "";

  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
      // Connect to the database
      $dbc = mysqli_connect('localhost', 'danieldev28', 'Z1dUUEA8dz28B03Q', 'mismatchdb');

      // Grab the user-entered log-in data
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
        $query = "SELECT user_id, username FROM mismatch_user WHERE username = '$user_username' AND password = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['username'] = $row['username'];
          setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
          header('Location: ' . $home_url);
        }
        else {
          // The username/password are incorrect so set an error message
          $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
        // The username/password weren't entered so set an error message
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }

  // Insert the page header
  $page_title = 'Log In';
  require_once('header.php');

  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>

  
  
      <!---=======Login form for staff memebers=====--->
    <section class="about aos-init aos-animate" data-aos="fade-up">
      <div class="container">
        
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				
				<!--<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <fieldset>
            <legend>Log In</legend>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" /><br />
            <label for="password">Password:</label>
            
            
            <input type="password" name="password" />
          </fieldset>
          <input type="submit" value="Log In" name="submit" />
        </form>
				-->
				
				
				
				
				
				
				
				
				
				<form class="login100-form validate-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>
            
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php if (!empty($user_username)) echo $user_username; ?>">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit" name="submit">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="#" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
				
				
				
			</div>
		</div>
	</div>
        

      </div>
    </section>
    <!--==========End of Login Form==========-->
  
  

<?php
  }
  else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>

<?php
  // Insert the page footer
  require_once('footer.php');
?>



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../environment/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../environment/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../environment/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../environment/assets/vendor/php-email-form/validate.js"></script>
  <script src="../environment/assets/vendor/venobox/venobox.min.js"></script>
  <script src="../environment/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../environment/assets/vendor/counterup/counterup.min.js"></script>
  <script src="../environment/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../environment/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../environment/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../environment/assets/js/main.js"></script>

	
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