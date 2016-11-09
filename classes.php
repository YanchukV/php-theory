<?php

class Publication {

	public $id;
	public $title;
	public $data;
	public $short_content;
	public $content;
	public $preview;
	public $author_name;
	public $type;

	function __construct($row) {

		$this->id = $row['id'];
		$this->title= $row['title'];
		$this->data = $row['data'];
		$this->short_content = $row['short_content'];
		$this->content = $row['content'];
		$this->preview = $row['preview'];
		$this->author_name = $row['author_name'];
		$this->type = $row['type'];

	}

}

class NewsPublication extends Publication {


	public function printItem() {
		echo '<br> Новость'.$this->title;
		echo '<br> Дата'.$this->data;
	}

}

class ArticlePublication extends Publication {


	public function printItem() {
		echo '<br> Статья: '.$this->title;
		echo '<br> Автор: '.$this->author_name;
		echo '<br>';
	}

}

class PhotoReportPublication extends Publication {


	public function printItem() {

		echo '<br> Фотоотчет: '.$this->title;
		echo '<br><img src="http://test'.$this->preview.'" />';
		echo '<br>';

	}

}