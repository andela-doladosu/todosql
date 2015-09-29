<?php
namespace Dara;

class Connection extends ConnectionBaseClass
{
  public function selectDb($database)
  {
    $this->exec('use '.$database);
  }

  public function getToDos($table, $column1, $column2)
  {
    $action = $this->prepare('Select '.$column1.', '.$column2.' from '.$table);
    $action->execute();
    while ($result = $action->fetch(\PDO::FETCH_ASSOC)) {
      echo $result['title'].': '. $result['description'].'<br/>';
    }
  }
}