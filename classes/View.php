<?php
/*
Класс для отображения через определенный шаблон. Создается пустой массив $data который заполняется
через метод assign() в который приходят данные из модели News, а сам класс View создается в контроллере
метод display выводит данные из массива data через выбранный шаблон.
Вариант 1.2 Добавляется магический метод __set() для того чтобы прочитать, а точнее записать не существующие
свойства класса которые есть в контроллере, контроллер создает класс и создает переменные которые, не описаны
в классе но с помощью __set можно эти переменные прочитать.
*/
//version 1.2
class View implements Iterator
{
	protected $data = [];
	
	public function __set($k,$v)//добавлено в версии 1.2
	{
		$this->data[$k]=$v;
	}
	
	public function display($template)
	{
		foreach ($this->data as $key=>$val)
		{
			$$key=$val;
		}
		include __DIR__ . '/../views/' . $template;
	}
	

	public function current()
	{
		return current($this->data);
	}
	public function next()
	{
		next($this->data);
	}
	public function key()
	{
		return key($this->data);

	}
	public function valid()
	{
		return isset($this->data[$this->key()]);
	}
	public function rewind()
	{
		reset($this->data);
	}

	

	/*public function assign($name,$value)
	{
		$this->data[$name]=$value;

	}
	*/
	
}