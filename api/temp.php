<?php

use Castoware\Database;

require("vendor/autoload.php");
$database = new Database;
$db = $database->db;

$mailingList = $db->fetchAll("SELECT * FROM mailing_list");

$outputFile = tempnam(sys_get_temp_dir(), 'plata-oro-mailing-list');

$fp = fopen($outputFile, 'w');
foreach ($mailingList as $rec) {
  fputcsv($fp, (array) $rec);
}
fclose($fp);

readfile($outputFile);
