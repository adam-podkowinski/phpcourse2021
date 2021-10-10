<?php

var_dump($_COOKIE);

setcookie('name', 'eluwina', time() + 10, '/');

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
