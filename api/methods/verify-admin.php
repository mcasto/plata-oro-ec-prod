<?php
function verifyAdmin($db, $request, $util)
{
  $cred = json_decode($request->body);
  $username = $cred->username;
  $password = $cred->password;

  $user = $db->fetch("SELECT * FROM %n WHERE %n=?", 'admin', 'username', $username);

  if ($user) $valid = true;

  $valid = $user && password_verify($password, $user->pass_hash);

  $util->success($valid);
}
