<?php
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
unset($array['1']);
for ($i = 1; $i < count($array); $i++) {
    $array[$i] = $array[$i + 1];
}
unset($array[count($array) - 1]);
var_dump($array);
?>

