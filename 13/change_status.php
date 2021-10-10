<?php

if (file_exists('todos.json')) {
    $json = file_get_contents('todos.json');
    $todos = json_decode($json, true);

    $todoName = $_POST['todo_name'] ?? '';

    $todos[$todoName]['completed'] = !$todos[$todoName]['completed'];

    file_put_contents('todos.json', json_encode($todos, JSON_PRETTY_PRINT));
}

header('Location: index.php');