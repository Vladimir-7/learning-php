<?php
error_reporting(E_ALL);
/**
Входной файл index который выбирает к какому контролеру обратиться. FrontController.
Сначала переменная $ctrl проверяет происходит ли запрос GET по параметру ctrl если нет то ctrl=News
тоесть NewsController, затем проверяется какой выбрать экшен если экшен не присваивается то тогда All
Затем Создание переменной controllerClassName с помощью которой то что задано в ctrl при стыковывается к слову controller
таким образом мы обращаемся к нужному контролеру. Затем создается новый контролер и присходит обращение
к нужному методу тоесть экшену.
**/
require_once __DIR__ . '/autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'Index';
//require_once __DIR__ . '/models/News.php';
$controllerClassName = $ctrl . 'Controller';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();

?>
