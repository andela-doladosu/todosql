<?php
include 'vendor/autoload.php';

use Dara\Connection;

$driver = 'mysql';
$host   = 'localhost';
$db     = 'todosql';
$user   = 'root';
$pass   = '';


$conn = new Connection($driver, $host, $db, $user, $pass);

$conn->selectDb($db);

$table = 'todos' ;
$col1  = 'title';
$col2  = 'description';

$conn->getToDos($table, $col1, $col2);