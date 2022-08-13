<?php
function getContents($db, $request, $util, $config)
{
  $path = $request->params->path ?? "/";
  $page = $db->from('pages')
    ->where('path')->is($path)
    ->select()
    ->first();

  $util->success(['page' => $page]);
}
