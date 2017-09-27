<?php
require_once __DIR__ . '/../classes/Db1.php';
require_once __DIR__ . '/../models/NewsModel.php';

class DController
{

	public function actionAll()
	{
		echo "<pre>";
		var_dump(NewsModel::findAll());
		echo "</pre>";

		//include __DIR__ . '/../views/one.php';
	}
	public function actionOne()
	{
		echo "<pre>";
		var_dump(NewsModel::findOne(1));
		echo "</pre>";
	}
	public function actionInsert()
	{
		$article = new NewsModel();
		$article->title = "Hello World!";
		$article->text = "HELLOHELLOHELLOHELLOHELLO";
		$article->insert();
	}

}



?>
