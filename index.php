<?php

$rss = file_get_contents("https://spryt.ru/feed/"); // Получаю rss-код
$cleanedRss = stristr($rss, "<?"); // Вычистил код ошибки из полученной переменной
$xml = simplexml_load_string($cleanedRss, 'SimpleXMLElement',LIBXML_NOCDATA);

foreach ($xml->channel->item as $item) {
    echo $item->title . "\n";
}
