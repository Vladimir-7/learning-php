<?php
require_once __DIR__ . '/../classes/Db1.php';
require_once __DIR__ . '/../models/NewsModel.php';

class SudoController
{
  public function actionInsert()
  {
    $article = new NewsModel();
    $article->title = $_POST['title'];
		$article->author = $_POST['author'];
		$article->text = $_POST['text'];
    $article->insert();
    include __DIR__ . '/../views/text.php';
  }
}

?>
