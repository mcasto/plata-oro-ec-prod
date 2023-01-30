<?php
function joinMailingList($db, $request, $util)
{
  $contact = json_decode($request->body, true);
  $contact['received'] = date("Y-m-d H:i:s");
  $db->query("INSERT INTO mailing_list", $contact);
}
