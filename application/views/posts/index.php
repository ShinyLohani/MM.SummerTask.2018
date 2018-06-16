<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Latest Posts</h1>
	<?php foreach ($posts as $post) : ?>
		<h3><?php echo $post['title']; ?></h3>
		<small>Posted On: <?php echo $post['created_at']; ?></small>
		<br>

		<?php echo $post['body']; ?>


	<?php endforeach; ?>
</body>
</html>