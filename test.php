<?php
$counter = 48;
$lastnum = 94;
$sum = 0;
$numcount = $lastnum - $counter + 1; // Add 1 to include both 48 and 94 in the count

while ($counter <= $lastnum) {
    $sum += $counter;
    $counter++;
}

$average = $sum / $numcount;
echo "The Average is: " . $average;
?>