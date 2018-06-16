<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		echo heading('Want to be a Subscriber!');

		echo form_open('Subscribers');
		
		echo form_label('Name','name');
		echo "&nbsp;";
		echo "&nbsp;";
		echo "&nbsp;";

		echo form_input('name');
		
		echo "<br>";
		echo "<br>";

		
		echo form_label('Password','password');
		echo "&nbsp;";
		echo "&nbsp;";

		echo form_password('password');
		
		echo "<br>";
		echo "<br>";
		
		echo form_submit('submit','Submit');
		
		echo form_close();

	?>
</body>
</html>