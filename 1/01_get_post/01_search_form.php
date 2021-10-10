<?php

$keyword = $_GET['keyword'] ?? 'keyword not set';

echo $keyword . '<br>';

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
<form action="" method="get">
  <label>
    <input type="text" name="keyword" value="<?php echo $keyword; ?>"
           placeholder="Type and hit enter">
  </label>
  <button>Search</button>
</form>
</body>
</html>
