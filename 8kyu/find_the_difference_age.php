<?php
// Find the Difference in Age between Oldest and Youngest Family Members

function differenceInAges($ages)
{
    sort($ages);
    $difference = max($ages) - min($ages);
    return [min($ages), max($ages), $difference];
}
print_r(differenceInAges([82, 15, 6, 38, 35]));
