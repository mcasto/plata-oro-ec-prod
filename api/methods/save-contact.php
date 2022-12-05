<?php
function saveContact($db, $request)
{
  /*
    $idFile = __DIR__ . '/id-file.txt';
    if (!file_exists($idFile)) file_put_contents($idFile, '0');
    $prevID = trim(file_get_contents(__DIR__ . '/id-file.txt'));
    $id = $prevID + 1;
    file_put_contents(__DIR__ . '/id-file.txt', $id);
    $s = explode(" ", urldecode($request->params->subject));
    $sid = array_map(function ($word) {
      return substr($word, 0, 1);
    }, $s);

    print "POE-" . strtoupper(implode("", $sid)) . "-" . sprintf("%06s", $id);
*/

  $contact = json_decode($request->body, true);
  $sid = array_map(function ($word) {
    return substr($word, 0, 1);
  }, explode(" ", $contact['subject']));

  $contact['rec_id'] = uniqid();
  $contact['received'] = date("Y-m-d H:i:s");


  $db->insert($contact)
    ->into('contacts');

  $rec = $db->from('contacts')
    ->where('rec_id')->is($contact['rec_id'])
    ->select()
    ->first();

  $db->update('contacts')
    ->where('id')->is($rec->id)
    ->set(['rec_id' => "POE-" . strtoupper(implode("", $sid)) . "-" . sprintf("%06s", $rec->id)]);
}
