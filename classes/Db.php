<?php
/**
Это файл класса Db в котором два метода которые осуществляют запрос в базу
**/
class Db
{
	public $link;
	public function __construct()
	{
	$this->link = mysqli_connect('localhost','root','admin','news');
		//mysql_select_db('news');
	}
	public function query($sql,$class='stdClass')
	{
		mysqli_set_charset($this->link, "utf8");
		$res = mysqli_query($this->link,$sql);
		while($row=mysqli_fetch_object($res,$class)){
			$ret[]=$row;
		}
		return $ret;
	}
	public function oneQuery($sql,$class='stdClass')
	{
		return $this->query($sql,$class)[0];
	}
	public function queryJ($sql)
	{
		$this->link->set_charset(utf8);
		$res = mysqli_query($this->link,$sql);
		return $res;
	}
}
?>
