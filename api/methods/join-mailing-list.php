<?php
function joinMailingList($db, $request)
{
  $contact = json_decode($request->body, true);
  $contact['received'] = date("Y-m-d H:i:s");
  $db->insert($contact)
    ->into('mailing_list');
}
