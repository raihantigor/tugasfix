
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

</body>
</html>

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="caption fixing-caption">
			<div class="thumbnail fixing-thumbnail">
				<form action="<?php echo site_url() . "/proses_login/ci_login"?>" method="POST">
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