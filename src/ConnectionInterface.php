<?php
namespace Dara;

Interface ConnectionInterface
{
  public function selectDb($database);

  public function getToDos($table, $column1, $column2);
}