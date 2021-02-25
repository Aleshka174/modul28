<?php 

require_once 'phpquery-master/phpQuery/phpQuery.php';

$html = file_get_contents('index.html');

$pq = phpQuery::newDocument($html);

$links = $pq->find('head meta[name="keywords"]');


foreach($links as $link){

		$pqLink = pq($link); //pq делает объект phpQuery

		$content[] = $pqLink->attr('content');
}

var_dump(implode($content));
echo "/n";


$links = $pq->find('head meta[name="description"]');


foreach($links as $link){

		$pqLink = pq($link); //pq делает объект phpQuery

		$contents[] = $pqLink->attr('content');
}

var_dump(implode($contents));
echo "n";


$links = $pq->find('title');

foreach($links as $link){

		$pqLink = pq($link); 

		$text[] = $pqLink->text();
}
var_dump(implode($text));

 ?>