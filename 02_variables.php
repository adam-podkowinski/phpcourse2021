<?php

define('PI', 3.14);

$siema = 10;

echo PI . '<br>';

/*
 * @var PHP_INT_MAX
 */
echo PHP_INT_MAX . '<br>';

$number = 10020.41;

echo number_format($number, 2, '.', ' ');

echo PHP_EOL . 'siema' . PHP_EOL . '<br>';
echo 'elo' . '<br>';

$number1 = 100;
$number2 = 50000;
$number3 = 1000500;

echo str_pad($number1, 120, 'x', 2) . '<br>';
echo str_pad($number2, 120, 'x', 2) . '<br>';
echo str_pad($number3, 120, 'x', 2) . '<br>';


const leo = 10;

echo defined('leo');

include '14/index.php';

class Database
{
    public string $siema = 'siema';
}

$elo = new Elo();

echo $elo->siema;

echo 'siema';

// What is a variable

// Variable types

// Declare variables

// Print the variables. Explain what is concatenation

// Print types of the variables

// Print the whole variable

// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined

// Constants

// Using PHP built-in constants
