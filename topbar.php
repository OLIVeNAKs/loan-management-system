<!DOCTYPE html>
<html>
<head>
<style>
	.logo-container {
		margin: auto;
		width: 40px;
		height: 40px;
		background: white;
		padding: 7px;
		border-radius: 50%;
	}
	.logo-image {
		width: 100%;
		height: 100%;
		border-radius: 50%;
		object-fit: contain;
	}
</style>
</head>
<body>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo-container">
  				<img class="logo-image" src="http://localhost/Loan_Management_System/assets/img/logo.png" alt="Logo">
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>ZERA CAPITAL UGANDA LIMITED</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
</nav>

</body>
</html>
