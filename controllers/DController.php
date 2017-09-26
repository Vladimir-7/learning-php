<?php
require_once __DIR__ . '/../classes/Db1.php';
require_once __DIR__ . '/../models/NewsModel.php';

class DController
{

	public function actionAll()
	{	
		var_dump(NewsModel::findAll());
	}
	public function actionOne()
	{
		var_dump(NewsModel::findOne(1));
	}

}	



?>