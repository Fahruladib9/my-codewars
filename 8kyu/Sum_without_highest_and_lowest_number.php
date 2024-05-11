<?php
// Sum without highest and lowest number

function sumArray($array)
{
    sort($array);
    array_pop($array);
    array_shift($array);
    return array_sum($array);
}
// print_r(square_sum([1, 2]));
echo (sumArray([6, 2, 1, 8, 10])); // 16
