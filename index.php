<?php

include 'rss.xml';

$url = "https://spryt.ru/feed/";
$rss = file_get_contents($url);
file_put_contents('rss.xml', $rss);
$xml = simplexml_load_file(rss.xml);
foreach ($xml->channel->title as $title) {
    echo $title;
}
