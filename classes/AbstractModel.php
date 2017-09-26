<?php
abstract class AbstractModel
{
	static protected $table;

		//МЕТОД вывода всех строк из таблицы
	public static function findAll()
	{
		//возвращает имя того класса которого использует функция.
		$class = get_called_class();

		//запрос к базе которая прописана в модели NEWSMODEL, выборка всех строк.
		$sql = 'SELECT * FROM ' . static::$table;
		//создание нового класса для подключения к базе данных
		$db1 = new Db1();
		$db1->setClassName($class);
		//запрос к базе данных в методе query(подготовка данных и вывод)
		return $db1->query($sql);
	}
	//МЕТОД вывода только одной строки (одной новости)
	public static function findOne($id)
	{
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		$db1 = new Db1();
		//Во втором аргументе функции можно передать, любые параметры запроса
		//Здесь передаем id новости из таблицы.
		return $db1->query($sql, [':id' => $id]);
	}
}
