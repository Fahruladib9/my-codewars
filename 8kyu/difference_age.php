<?php
// Find the Difference in Age between Oldest and Youngest Family Members
function differenceInAges($ages)
{
    $maxAge =  max($ages);
    $minAge =  min($ages);
    $difference = $maxAge - $minAge;
    return [
        $minAge, $maxAge, $difference
    ];
}
print_r(differenceInAges([82, 15, 6, 38, 35]));
