<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Form</title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
		.border{
			
				border: 5px solid black ;
				width: 300px;
				align-content: center;
			border-radius: 10px;
			padding: 15px;
      margin:15px;
      background:#1E90FF;
		}  		
  	</style>
</head>
<body>
	<div class="container">
	
	<div align="center" class="border">
		<h2>Login Form</h2><br>
	<?php
		$this->load->helper('form');

		echo form_open('verify/login');
	
		echo form_label('Username','username');
		echo "&nbsp;";
		echo form_input('username');
		echo "<br>";
		echo "<br>";
		echo form_label('Password','password');
		echo "&nbsp;";
		echo "&nbsp;";
		echo form_password('password');
		echo "<br>";
		echo "<br>";
		echo form_submit('Submit','Login');

		echo form_close();
	?>
</div>
</div>
</body>
</html>