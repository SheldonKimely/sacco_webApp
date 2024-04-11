<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signup</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="assets/assets_for_signup/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/assets_for_signup/css/style.css">

		<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
	<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
      integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
	<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"
      integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	</head>

	<body>
        <div id="notifDiv"></div>
		<div class="wrapper">
			<div class="inner">
				<form id="membershipApplicationForm" action="" method="post" enctype="multipart/form-data">
                     

					<h3>Membership Application</h3>
					<div class = "alert alert-success" id="success_message"></div>
    
					<div class = "alert alert-warning form-group">
						<ul id="saveform_errList"></ul>
					</div> 

					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="fname" class="name form-control" placeholder="Full Name" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="number" name="idNumber" class="idNumber form-control" placeholder="National ID Number   (Attach ID )" required number>
					</div>
					<div class="mb-3">
						<input class="idImage form-control form-control-sm" name="idImage" type="file">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" name="email" class="email form-control" placeholder="Email" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name="phone"  class="phone form-control" placeholder="Phone Number" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="churchMembershipNumber" accept=".png,.gif,.png" class="churchMembershipNumber form-control" placeholder="Church Membership Number" required>
					</div> 
					<div class="form-holder">
						<span class="lnr lnr-select"></span>
						<div class="form-holder">
							<select class="department form-select" name="department" aria-label="Default select example">
								<option selected>Department of Participation</option>
								<option value="men">Men</option>
								<option value="wwk">WWK</option>
								<option value="youth">Youth</option>
								<option value="sundaySchool">Sunday School</option>
							</select>
						</div>
						
					</div>
					<div class="form-holder">
						<span class="lnr lnr-briefcase"></span>
						<input type="text" name="service" class="service form-control" placeholder="Service to the Church" required>
					</div>
					<button type="submit" class="save_form" >
						<span>Apply</span>
					</button>
				</form>
				<script>
					$(document).ready(function() {
						$(document).on('submit', '#membershipApplicationForm', function(e){
							e.preventDefault();
						/*
						var data = {
							'name': $('.name').val(),
							'idNumber': $('.idNumber').val(),
							'idImage': $('.idImage').val(),
							'email': $('.email').val(),
							'phone': $('.phone').val(),
							'churchMembershipNumber': $('.churchMembershipNumber').val(),
							'department': $('.department').val(),
							'service': $('.service').val(),
						}*/
						//console.log(data);

						let formData = new FormData($('#membershipApplicationForm')[0]);

						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});
						$.ajax({
							type: "POST",
							url: "/membership_applications",
							data: formData,
							dataType: "json",
							contentType: false,
							processData: false,

							success: function (response){
								//console.log(response);
								if(response.status == 400)
								{
									$('#saveform_errList').html("");
									$('#saveform_errList').removeClass('alert alert-danger');
									$.each(response.errors, function (key, err_values){
										$('#saveform_errList').append('<li>'+err_values+'</li>');
									});
								}
								else if(response.status == 200){
									
									$('#saveform_errList').html("");
									$("#membershipApplicationForm")[0].reset();
									$('#success_message').addClass('alert alert-success');
									$('#success_message').text(response.message);

								}
							}
						});

						});
					});
				</script>
			</div>
			
		</div>
		
		<script src="assets/assets_for_signup/js/jquery-3.3.1.min.js"></script>
		<script src="assets/assets_for_signup/js/main.js"></script>  
	</body>
</html>
