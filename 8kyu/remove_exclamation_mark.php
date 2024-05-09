<?php
// remove exclamation mark

function remove_exclamation_marks($string)
{
    return str_replace('!', '', $string);
}
echo (remove_exclamation_marks('Hello World!')); // Hello World
