<?php
require_once __DIR__ . '/../models/News.php';

class AdminController
{
	public function actionAdd()
	{
		$title = $_POST['title'];
		$author = $_POST['author'];
		$text = $_POST['text'];
		$items = News::addNews($title,$author,$text);
		echo "Добавление новости" . " - " . $title;
	}
}

?>