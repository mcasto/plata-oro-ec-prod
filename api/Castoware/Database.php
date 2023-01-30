<?php

namespace Castoware;

use Dibi\Connection;

class Database
{
  public $db;

  function __construct()
  {
    $devPath = "/Users/mike/website-data-repo";
    $prodPath = "/home/u466389499/domains/castoware.com/data-repo";

    $dbPath = file_exists($devPath) ? $devPath : $prodPath;
    if (!file_exists($dbPath)) {
      error_log("Invalid database path");
      return [
        'status' => 'error',
        'message' => 'Unable to access database'
      ];
    }

    $dbFile = $dbPath . '/plata-oro-ec.db';
    $databaseConnection = $this->connectSqlite($dbFile);

    $this->db = new Connection($databaseConnection);
  }

  private function connectSqlite($dbFile)
  {
    return [
      'driver' => 'sqlite',
      'database' => $dbFile
    ];
  }
}
