<!DOCTYPE html>
<html>
<head>
	<title>Insert new post</title>
</head>
<body>

	<form action="http://localhost/myproject/index.php/post_controller" method="post" >
	<table align="center" border="10" width="700">
		<tr><td colspan="5" align="center" style="background-color: cyan; font-size: 36px; padding: 15px;">Insert New Post here!</td></tr>
			<tr>
				<td  align="right" style="padding: 5px;">Post title:</td>
				<td><input type="text" name="Title" size="79" ></td>
			</tr>
			<tr>
				<td align="right" style="padding: 5px;">Author:</td>
				<td><input type="text" name="Author" size="79"></td>
			</tr>
			<tr>
				<td  align="right" style="padding: 5px;">Post image:</td>
				<td><input type="file" name="Image"></td>
			</tr>
			<tr>
				<td  align="right" style="padding: 5px;" >Post Content:</td>
				<td><textarea name="Content" cols="80" rows="30"></textarea></td>
			</tr>
			<tr>
				<td colspan="5" align="center" style="padding: 5px;"><input style="font-size: 20px; font-family: Comic Sans MS; background-color: cyan;" type="submit" name="post" value="Post Article"> </td>
			</tr>
	</table>
</form>
</body>
</html>