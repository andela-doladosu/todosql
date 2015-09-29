<?php
namespace Dara;

class Connection extends \PDO
{
  protected $db;
  protected $driver;
  protected $host;
  protected $username;
  protected $password;

  public function __construct($db, $driver, $host, $username, $password)
  {
    $this->driver   = $driver;
    $this->username = $username;
    $this->password = $password;
    $this->host = $host;
    $this->db = $db;
    parent::__construct($this->driver, $this->user, $this->password);
  }
}