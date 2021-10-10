<?php

class Reee {
    public int $siema = 10;
}

function hello(...$numbers)
{
    return array_reduce($numbers, fn($carry, $e) => $carry + $e);
}

echo hello(1, 2, 3) . '<br>';

echo date('Y-M-d H:i:s') . '<br>';


$siema = new Reee();

echo $siema->siema;