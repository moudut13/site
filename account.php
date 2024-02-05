<!DOCTYPE html>
<html>

<head>
	<title>Basic - Account</title>
	<link rel="stylesheet" type="text/css" href="css/account.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
	<div id="wrapper">
        <!-- header file include -->
        <?php @include "include/header.php";?>
        <!-- nav file include -->
        <?php @include "include/nav.php";?>
		<div class="content_wrap">
			<div class="account">
				<h2>Account</h2>
			</div>
			<div class="section_wrap">
				<div class="account_form_wrapper">
					<div class="sign_up_wrap">
						<div class="sing_up_head">
							<h2>Sign up</h2>
						</div>
						<div class="form_wrapper">
							<div class="form_wrap">
								<form class="" action="signup.php"  method="POST">
									<label for="name">Name</label>
									<input type="text" id="name" name="name" placeholder="Enter Your Name..">

									<label for="username">User Name</label>
									<input type="text" id="username" name="username" placeholder="Enter Your User Name..">

									<label for="email">Email</label>
									<input type="text" id="email" name="email" placeholder="Enter Your Email..">

									<label for="password">Password</label>
									<input type="text" id="spassword" name="password" placeholder="Enter Your Password..">

									<label for="cpassword">Conformation Password</label>
									<input type="text" id="cpassword" name="cpassword" placeholder="Enter Your Conformation Password..">

									<input type="submit" value="Sign Up">
								</form>
							</div>
						</div>
					</div>
					<div class="sign_in_wrap">
						<div class="sing_in_head">
							<h2>Sign in</h2>
						</div>
						<div class="form_wrapper">
							<div class="form_wrap">
								<form class="" action="#">
									<label for="uname">User Name</label>
									<input type="text" id="uname" name="uname" placeholder="Enter Your User Name..">

									<label for="password">Password</label>
									<input type="text" id="password" name="password" placeholder="Enter Your Password..">

									<input type="submit" value="Sign in">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Footer file include -->
        <?php @include "include/footer.php";?>
	</div>
</body>

</html>