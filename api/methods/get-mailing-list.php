<?php
function getMailingList($db, $request, $util)
{
  $mailingList = $db->fetchAll("SELECT * FROM mailing_list");

  $outputFile = tempnam(sys_get_temp_dir(), 'plata-oro-mailing-list');

  $fp = fopen($outputFile, 'w');
  foreach ($mailingList as $rec) {
    fputcsv($fp, (array) $rec);
  }
  fclose($fp);

  header('Content-Disposition: attachment; filename=plata-oro-ec-mailing-list-' . date("Y-m-d-H-i-s") . '.csv');
  header('Content-Type: application/octet-stream'); // Downloading on Android might fail without this
  ob_clean();

  readfile($outputFile);
}
