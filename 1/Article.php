<?php
error_reporting(E_ALL);

$_POST = json_decode(file_get_contents(__DIR__ . "./news.json"), true);

Class Article
{
public $name;
public $date;
public $content;
//const URL = 'https://newsapi.org/v1/articles?source=google-news&sortBy=top&apiKey=0dea66493e894ebbac5b8eb0df626046\';
//public $data = $url';

 //   public function getData()
   // {
       //  if ($_POST){

      //   }
//}
//const URL = ';
    //json_decode(file_get_contents(__DIR__ . "./news.json"),true);

    public function getName()
    {
        if ($this -> $name)
        {
            return $_POST['articles']['title'];
        }

    }

    public function getDate()
    {
        if ($this -> $date){
        return $_POST['articles']['publishedAt'];}
}

    public function getContent()
    {
        if ($this -> $content){
        return $_POST['articles']['url'];}
}

}
$data = new Article();
$news1 = new Article();
$news2 = new Article();
$news3 = new Article();

//google news api 0dea66493e894ebbac5b8eb0df626046