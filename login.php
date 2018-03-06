
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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

</body>
</html>

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="caption fixing-caption">
			<div class="thumbnail fixing-thumbnail">
				<form action="proses_login.php" method="POST">
			  		<div class="form-group">
			    		<label>Nama:</label>
			    		<input type="nama" class="form-control" name="nama" required>
			  		</div>
			  		<div class="form-group">
			    		<label>nrp:</label>
			    		<input type="nrp" class="form-control" name="nrp" required>
				  	</div>
			  		<button type="submit" class="btn btn-info">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>