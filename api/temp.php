<?php

use Castoware\Config;
use Opis\Database\Database;

require(__DIR__ . '/vendor/autoload.php');
$config = new Config;
$db = new Database($config->connection);

$pages = $db->from('pages')
  ->select(['id'])
  ->all();

$lip = new joshtronic\LoremIpsum();

foreach ($pages as $page) {
  $db->update('pages')
    ->where('id')->is($page->id)
    ->set(['contents' => $lip->paragraphs(rand(2, 6))]);
}
