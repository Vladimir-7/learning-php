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
		var_dump(NewsModel::findOne(1));
	}

}



?>
