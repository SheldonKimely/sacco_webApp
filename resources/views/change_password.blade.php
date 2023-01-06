<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/assets_for_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<!--<link rel="stylesheet" type="text/css" href="assets/assets_for_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/assets_for_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	@if(Session::has('fail'))
	<div class="alert alert-fail">
	{{Session::get('fail')}}
	</div>
	@endif

    <!-- @if(Session::has('success'))
    <div class="alert alert-success">
    {{Session::get('success')}}
    </div>
    @endif -->
    	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action ="{{route('change_password')}}" method="post">
				@csrf	
				<span class="login100-form-title p-b-32">
						Change Password
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
						<span class ="text-danger">@error('name') {{$message}} @enderror</span>
					</div>
					
					<span class="txt1 p-b-11">
						New Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "new_password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="new_password" >
						<span class="focus-input100"></span>
					</div>
					<span class ="text-danger">@error('name') {{$message}} @enderror</span>

					<span class="txt1 p-b-11">
						New Password Again
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "confirm_password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="confirm_password" >
						<span class="focus-input100"></span>
					</div>
					<span class ="text-danger">@error('name') {{$message}} @enderror</span>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="/login-user" class="txt3">
								Go to Login
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							CHANGE PASSWORD
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/assets_for_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/assets_for_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/assets_for_login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/assets_for_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/assets_for_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/assets_for_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/assets_for_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/assets_for_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/assets_for_login/js/main.js"></script>

</body>
</html>