<?php

// BASIC PHP SYNTAX.

echo "Hello World!";

// Variables.
$a = 10;
$b = 12;

// Conditionals.
if ($a == $b) {
    echo "A is equal to B";
} else {
    echo "A is not equal to B";
}

// Ternary operator.
echo ($a == $b) ? "A is equal to B" : "A is not equal to B";

// Loops.
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
// While loop.
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

// Functions.
function add($a, $b) {
    return $a + $b;
}

echo add(10, 20);

// Arrays.
$fruits = ['apple', 'banana', 'orange'];
echo $fruits[0];

// Associative arrays.
$person = ['name' => 'John', 'age' => 30];
echo $person['name'];
// Loop through associative arrays.
foreach ($person as $key => $value) {
    echo $key . ' ' . $value;
}

// Superglobals.
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_FILES, $_SERVER.


