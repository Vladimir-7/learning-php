<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
	<meta charset="utf-8" />
	<style type="text/css">
		div, .layer{
			margin: 10px;
			padding: 10px, 5px;
		}
	</style>
</head>
<body>
<h1>ДОбавить Новость</h1>
<form action="/dz3/index.php?ctrl=Sudo&act=Insert" method="POST">
	<div class="layer">
	<div>title:<input type="text" name="title"></div>
	<div>author: <input type="text" name="author"></div>
	<div>text: <textarea  rows="10" cols="45" name="text"> </textarea></div>
	<input type="submit" value="ok">
</div>
		</form>
</body>
</html>
