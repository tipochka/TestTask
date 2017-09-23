<?php
require_once ('DbMySql.php');

$mysql = new DbMySql();
if($result = $mysql->query('SELECT * FROM data')) {
    while ($row = $result->fetch_assoc()) {
        echo 'id: '.$row['id'].'|';
        echo 'name: '.$row['name'].'<br>';
    }
}