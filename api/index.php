<?php

use Castoware\Config;
use Castoware\Request;
use Castoware\Util;

header("Access-Control-Allow-Origin: *");

ini_set("error_log", __DIR__ . '/error.log');

require_once("vendor/autoload.php");
$router = new AltoRouter();
$config = new Config;
$db = $config->connection ? new \Opis\Database\Database($config->connection) : '';
$util = new Util;
$request = new Request;

require_once(__DIR__ . '/methods/index.php');

$router->addRoutes([
  ['get', '/api/get-contents/[:path]?', 'getContents'],
  ['get', '/api/get-contact-id/[:subject]', function ($db, $request) {
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
  }]
]);

$match = $router->match();

if (is_array($match) && is_callable($match['target'])) {
  $request->params = (object) $match['params'];
  call_user_func_array(
    $match['target'],
    [
      'db' => $db,
      'request' => $request,
      'util' => $util,
      'config' => $config
    ]
  );
} else {
  // no route was matched
  header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
