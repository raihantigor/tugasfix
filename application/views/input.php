<?php
	include("config/config.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title>input</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
</head>
<body>
			<li><a href="<?php echo "index.php?page=tampil"?>"></a></li>
	<div class="container">
		<h1 class="text-center">Input data</h1>
		<div class="col-md-6 col-md-offset-4">
			<form class="form-horizontal" action="<?php echo"proses_input.php"; ?>" method="POST">
					<div class="form-group">
					<div class="col-sm-10">
			    		<label>Nama:</label>
			    		<input type="nama" class="form-control" name="nama" required>
			  		</div>
			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="email">email:</label>
			    	<div class="col-sm-10">
			      		<input type="email" class="form-control" name="email" placeholder="Masukan email">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="nrp">nrp:</label>
			    	<div class="col-sm-10"> 
			      		<input type="password" class="form-control" name="nrp" placeholder="Masukan NRP">
			    	</div>
			  	</div>
			  	<div class="form-group"> 
			    	<div class="col-sm-offset-2 col-sm-10">
			      		<button type="submit" class="btn btn-default">Input data</button>
			    	</div>
			 	 </div>
			</form>
		</div>
	</div>
</body>
</html>