<?php
$todos = [];
if (file_exists('todos.json')) {
    $json = file_get_contents('todos.json');
    $todos = json_decode($json, true);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="./newtodo.php" method="post">
    <label for="todo_name"></label>
    <input type="text" name="todo_name" placeholder="Enter your todo name" id="todo_name">
    <button>New todo</button>
</form>

<br>

<?php
foreach ($todos as $todoName => $todo): ?>
    <div style="margin-bottom: 12px;">
        <form action="change_status.php" method="post" style="display: inline-block">
            <label for="completed"></label>
            <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
            <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?> id="completed">
        </form>
        <?php echo $todoName ?>
        <form action="delete.php" method="post" style="display: inline-block">
            <input type="hidden" name="todo_name" value="<?php echo htmlspecialchars($todoName) ?>">
            <button>Delete</button>
        </form>
    </div>
<?php endforeach; ?>

<script>
    const checkboxes = document.querySelectorAll('input[type=checkbox]');
    const a = [];
    checkboxes.forEach(ch => {
        ch.onclick = function() {
            this.parentNode.submit();
        };
    });
</script>

</body>
</html>
