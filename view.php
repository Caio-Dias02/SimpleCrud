<?php

require __DIR__.'/users.php';

$userId = $_GET['id'];

$user = getUserById($userId);

var_dump($user);

?>