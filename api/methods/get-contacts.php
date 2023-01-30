<?php

use PhpZip\ZipFile;

require_once(dirname(__DIR__) . '/vendor/autoload.php');

function getContacts($db, $request, $util)
{
  $contacts = $db->fetchAll("SELECT * FROM contacts");

  $buildFile = sys_get_temp_dir() . '/plata-oro-ec-contacts-' . date("Y-m-d-H-i-s") . ".zip";

  $zipFile = new ZipFile();

  foreach ($contacts as $contact) {
    $filename = $contact->rec_id . ".txt";
    $contents = [
      "Received: " . $contact->received,
      "From: " . $contact->name,
      "Subject: " . $contact->subject,
      "",
      $contact->message
    ];

    $zipFile
      ->addFromString($filename, implode("\n", $contents))
      ->saveAsFile($buildFile);
  }

  header('Content-Disposition: attachment; filename=plata-oro-ec-contacts' . date("Y-m-d-H-i-s") . '.zip');
  header('Content-Type: application/octet-stream');
  readfile($buildFile);
}
