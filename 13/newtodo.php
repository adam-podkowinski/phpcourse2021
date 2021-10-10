<?php

$todoName = $_POST['todo_name'] ?? false;
$todoName = trim($todoName);

if ($todoName) {
    if (file_exists('todos.json')) {
        $json = file_get_contents('todos.json');
        $todos = json_decode($json, true);
    } else {
        $todos = [];
    }

    $todos[$todoName] = ['completed' => false];
    file_put_contents('todos.json', json_encode($todos, JSON_PRETTY_PRINT));
}

header('Location: index.php');
