<?php
/** Это файл модели, здесь подключается База через класс Db и производятся запросы в базу 
для разных экшенов. getAll выводит все записи, getOne только одну по id.
**/ 
require_once __DIR__ . '/../classes/Db.php';

class News
{
	public $id;
	public $title;
	public $author;
	public $text;

	public static function getAll()
	{
		$db = new Db();
		return $db->query('SELECT * FROM NewsArcticle', 'News');
	}
	public static function getOne($id)
	{
		$db = new Db();
		return $db->oneQuery("SELECT * FROM NewsArcticle WHERE id =" . $id , 'News');
	}
	public static function delOne($id)
	{
		$db = new Db();
		return $db->oneQuery("DELETE FROM NewsArcticle WHERE id=" . $id, 'News');
	}
	//Следующий метод для контролера Админ (AdminController) Добавление новости в базу
	public static function addNews($var1,$var2,$var3)
	{
		$db = new Db();
		return $db->queryJ("INSERT INTO NewsArcticle (title,author,text) VALUES ('".$var1."','".$var2."','".$var3."')");
	}
}
?>