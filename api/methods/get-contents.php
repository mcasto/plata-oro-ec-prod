<?php
function getContents($db, $request, $util)
{
  $path = $request->params->path ?? "/";

  $page = $db->fetch("SELECT * FROM pages WHERE path=?", $path);

  $util->success(['page' => $page]);
}
