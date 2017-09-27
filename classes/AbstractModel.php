<?php
require_once __DIR__ . '/Db1.php';
abstract class AbstractModel
{
	static protected $table;
	protected $data = [];

	public function __set($k,$v)
	{
		$this->data[$k] = $v;
	}
	public function __get($k)
	{
		return $this->data[$k];
	}

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
	public function insert()
	{	$cols = array_keys($this->data);
		$ins = [];
		foreach($cols as $col)
		{
			$ins[] = ':' . $col;
			$data[':' . $col] = $this->data[$col];
		}
		var_dump($cols);
		$sql = "INSERT INTO " . static::$table . ' 
		('. implode(',',$cols) .')
		 VALUES 
		('. implode(',',$ins) .')
		  '; 
		$db = new Db1();
		$db->execute($sql,$data);
	}
	
}
