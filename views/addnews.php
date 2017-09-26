<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
	<meta charset="utf-8" />
</head>
<body>
<h1>ДОбавить Новость</h1>
<form action="/dz3/index.php?ctrl=Admin&act=Add" method="POST">
	title: <input type="text" name="title">
	author: <input type="text" name="author">
	text: <input type="text" name="text">
	<input type="submit" value="ok">
</form>
</body>
</html>
