<?php
// replace words 

function replace(string $s): string
{
    $words = str_split('aeiouAEIOU');
    return str_replace($words, '!', $s);
}

echo (replace("Hi!")); // "H!!"
