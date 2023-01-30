<?php

namespace Castoware;

class Request
{
  public $headers, $body, $post, $files, $params;

  function __construct()
  {
    $this->headers = function_exists('getallheaders') ? getallheaders() : '';
    $this->body = file_get_contents("php://input");
    $this->post = (object) $_POST;
    $this->files = $_FILES;
  }
}
