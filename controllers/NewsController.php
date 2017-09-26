<?php
/**
Это файл котроллер здесь основная логика. Два экшена один выводит все записи другой только одну
вызвается метод из модели News в котором происходит обращение к базе данных, которая через класс
Db создает массив данных в виде списка записей новостей и выводит, отображает через views.
**/
error_reporting(E_ALL);
require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../classes/View.php';

class NewsController
{
	public function actionIndex()
	{
		$items = News::getAll();
		$view = new View();
		$view->items = $items;
		$view->display('index.php');
		
		//include __DIR__ . '/../views/index.php';
	}
	public function actionAll()
	{
		
		$items = News::getAll();
		$view = new View();
		$view->items = $items;
		var_dump($items);

		foreach ($view as $k => $v){
			echo $k;
			echo "<hr>";
		}
		die;
		$view->display('all.php');

	}
	public function actionOne()
	{
		$id = $_GET['id'];
		//echo "action ONE !!!" . $id;
		
		$items = News::getOne($id);
		$view = new VIew();
		var_dump($items);
		echo "<br>";
		print_r($items);
		$view->items = $items;
		$view->display('one.php');
		//include __DIR__ . '/../views/one.php';
	}
	public function actionDel()
	{
		$id = $_GET['id'];
		$items = News::delOne($id);
		echo "DELETE id =" . $id;
	}


}