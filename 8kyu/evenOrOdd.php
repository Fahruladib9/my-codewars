<?php
// even or odd

function even_or_odd(int $n): string
{
    $n = abs($n);
    if ($n % 2 == 1) {
        return 'Odd';
    } else {
        return 'Even';
    }
}

echo (even_or_odd(-1)); // Odd
