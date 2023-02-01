<?php

use Castoware\Sendgrid;

require(dirname(__DIR__) . '/vendor/autoload.php');

function saveContact($db, $request, $util)
{
  $contact = json_decode($request->body, true);
  $sid = array_map(function ($word) {
    return substr($word, 0, 1);
  }, explode(" ", $contact['subject']));

  $contact['rec_id'] = uniqid();
  $contact['received'] = date("Y-m-d H:i:s");

  $db->query("INSERT INTO contacts", $contact);

  $rec = $db->fetch("SELECT * FROM contacts WHERE rec_id=?", $contact['rec_id']);

  $recID = "POE-" . strtoupper(implode("", $sid)) . "-" . sprintf("%06s", $rec->id);

  $db->query("UPDATE contacts SET %a WHERE id=?", ['rec_id' => $recID], $rec->id);

  $sendgrid = new Sendgrid();

  // send email

  // $to = "castoware@gmail.com";
  // $toName = 'My Testing';

  $toList = [
    ['name' => '', 'email' => 'contact@plataoroec.com'],
    ['name' => '', 'email' => 'shopcuenca@gmail.com']
  ];

  foreach ($toList as $toItem) {
    $to = $toItem['email'];
    $toName = $toItem['name'];
    $from = 'plata-oro-ec-contacts@castoware.com';
    $fromName = 'Website Contact: ' . $recID;

    $sendgrid->sendEmail($db, $rec->email, $rec->name, $to, $toName, $from, $fromName, $rec->subject, $rec->message, $rec->id);
  }
}
