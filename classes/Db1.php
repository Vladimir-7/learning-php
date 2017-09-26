<?php
class Db1
{
	private $dbh;
	private $className = 'stdClass';

	public function __construct()
	{
		$this->dbh = new PDO("mysql:dbname=news;host=localhost;charset=cp1251",'root','admin');

	}
	public function setClassName($className)
	{
			$this->className = $className;
	}

	public function query($sql,$params=[])
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);

	}
}
?>
