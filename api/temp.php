<?php

use Castoware\Config;
use Opis\Database\Database;

require("vendor/autoload.php");
$config = new Config;
$db = new Database($config->connection);

$lip = new joshtronic\LoremIpsum();

$contents = $lip->paragraphs(6);

$db->update('pages')
  ->where('id')->is(7)
  ->set(['contents' => $contents]);
