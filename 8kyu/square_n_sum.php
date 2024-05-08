<?php
// Square(n) Sum

function square_sum($numbers)
{
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += pow($num, 2);
    }
    return $sum;
}
// print_r(square_sum([1, 2]));
print_r(square_sum([-1, -2]));
