<?php
abstract class AbstractModel
{
	static protected $table;
	
	
	public static function findAll()
	{
		$sql = 'SELECT * FROM ' . static::$table;
		$db1 = new Db1();
		return $db1->query($sql);
	}
	public static function findOne($id)
	{
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
		$db1 = new Db1();
		return $db1->query($sql, [':id' => $id]);
	}
}