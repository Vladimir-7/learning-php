<?php
require_once __DIR__ . '/../classes/Db1.php';
require_once __DIR__ . '/../models/NewsModel.php';
require_once __DIR__ . '/../classes/View.php';

class DController
{

	public function actionAll()
	{
		$items = NewsModel::findAll();
		$view = new View();
		$view->items = $items;
		$view->display('index.php');

		//include __DIR__ . '/../views/one.php';
	}
	public function actionOne()
	{
		//$id = $_GET['id'];
		$items = NewsModel::findOne(16);
		$view = new View();
		$view->items = $items;
		$view->display('one.php');
	}
	/*public function actionInsert()
	{
		$article = new NewsModel();
		$article->author = "Vladimir Geekanutyi";
		$article->title = "Hello World!";
		$article->text = "HELLOHELLOHELLOHELLOHELLO";
		$article->insert();
	}
	*/
}



?>
