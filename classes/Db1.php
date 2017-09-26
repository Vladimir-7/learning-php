<?php
class Db1
{
	private $dbh;

	public function __construct()
	{
		$this->dbh = new PDO('mysql:dbname=news;host=localhost','root','admin');

	}
	public function query($sql,$params=[])
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll();

	}
}
?>
