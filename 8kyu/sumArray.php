<?php
// sum array

function sum(array $a): float
{
    return array_sum($a);
}

echo (sum([1, 5.2, 4, 0, -1]));
