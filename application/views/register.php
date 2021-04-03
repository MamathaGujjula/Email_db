<!DOCTYPE html>
<html>
<head>

	<title>Signup with Email Verification</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Signup with Email Verification</h1>
	<div class="row">
		<div class="col-sm-4">
			<h3 class="text-center">Signup Form<?= $title ?></h3>
			<form method="POST" action="<?php echo site_url('user/register_db'); ?>">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" id="email" name="email" value>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm Password:</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
		<a href="<?= base_url() ?>login" >Login</a>
</body>
</html>