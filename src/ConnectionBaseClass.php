<?php
namespace Dara;

abstract class ConnectionBaseClass extends \PDO implements ConnectionInterface
{
  protected $db;
  protected $driver;
  protected $host;
  protected $username;
  protected $password;

  public function __construct($driver, $host, $db, $username, $password)
  {
    $this->driver   = $driver;
    $this->username = $username;
    $this->password = $password;
    $this->host = $host;
    $this->db = $db;
    parent::__construct($this->driver.':host='.$this->host, $this->username, $this->password);
  }

}