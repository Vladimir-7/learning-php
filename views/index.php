<html>
<head>
	<title>Views</title>
	<meta charset="utf-8" />
	<style type="text/css">
		.layer1{
			float: left;
			padding: 5px;
			width: 600px;
			margin: auto;
			background: #FFEFD5;
		}
		.layer2{
			float: right;
			padding: 5px;
			width: 400px;
		}
	</style>
</head>
<body>
	<div class="layer1">
		<h2><center>Новости</center><h2>
		<hr>
		<?php foreach($items as $item):?>
			<h3><?php echo $item->title; ?></h3>
			<div><?php echo $item->text; ?></div>
		<?php endforeach; ?>

	</div>


	<div class="layer2">
		<h2>Админ часть<h2>
		<hr>
		<div><a href="/dz3/views/addnews.php">Добавить Новость</a>
	</div>

</body>
</html>
