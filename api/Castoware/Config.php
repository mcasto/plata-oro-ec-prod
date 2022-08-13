<?php

namespace Castoware;

class Config
{
  function __construct()
  {
    $this->connection = false;

    if (class_exists("Opis\Database\Database")) {
      // Make sure to set the correct database name in connection

      $this->connection = new \Opis\Database\Connection(
        'sqlite:' . dirname(__DIR__) . '/plata-oro-ec.db'
      );

      $this->connection->logQueries();
    }

    $this->keyFile = __DIR__ . '/sendgrid.key';
  }
}
