<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<h1>Latest Posts</h1>

	<?php foreach ($posts as $post) : ?>
		<h3><?php echo $post['title']; ?></h3>
		<small>Posted On: <?php echo $post['created_at']; ?></small>
		<br>

		<?php echo $post['body']; ?><br><br>
		<a href="http://localhost/myproject/posts/view">Read more !</a>


	<?php endforeach; ?>
</div>
</body>
</html>