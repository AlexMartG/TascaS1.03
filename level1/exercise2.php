<?php

$numbers = [10, 20, 30, 40, 50, 60];

echo "Initial size: " . count($numbers) . "<br>";

unset($numbers[4]);

$numbers = array_values($numbers);

echo "Final size: " . count($numbers) . "<br>";

echo "Final array:<br>";
foreach ($numbers as $number) {
    echo $number . "<br>";
}

?>