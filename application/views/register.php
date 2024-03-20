<!doctype html>
<html lang="en">
  <head>
  	<title>Web E-Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
	
	<section class="ftco-section">
		<?php if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
		<div class="container">
	
		
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(assets/images/bg-1.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
								
			      	</div>
							<form  method="post" action="<?php echo base_url(); ?>register/proses" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
			      		</div>
						  <div class="form-group mb-3">
							<label class="label" for="password">Nama Lengkap</label>
						  <input type="text" class="form-control" name="nama" id="nama"  placeholder="Nama Lengkap" required>
						</div>
						<div class="form-group mb-3">
							<label class="label" for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" p placeholder="Password" required>
						</div>

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		            </div>
		            
		          </form>
		          <p class="text-center">Hve a account? <a data-toggle="tab" href="<?= base_url().'login' ?>">Sign In</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

