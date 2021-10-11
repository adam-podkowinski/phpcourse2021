<?php

var_dump($_POST);

require_once 'Connection.php';

$connection = new Connection();

$connection->addNote($_POST);

header('Location: index.php');