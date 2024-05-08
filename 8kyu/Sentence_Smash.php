<?php

function smash(array $words)
{
    return implode(" ", $words);
}
echo smash(["hello"]);
