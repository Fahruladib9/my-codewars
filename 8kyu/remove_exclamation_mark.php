<?php
// remove exclamation mark

function remove_exclamation_marks($string)
{
    $mark = '!';
    return str_replace($mark, '', $string);
}
echo (remove_exclamation_marks('Hello World!')); // Hello World
