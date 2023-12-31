<?php
$numbers = array(2, 7, 8, 12, 7);
// Use a loop to calculate the sum of all numbers in the array and print the result.
$length = count($numbers);
$sum = 0;
for($i = 0; $i < $length; $i++)
{
    $sum += $numbers[$i];
}
echo $sum;
?>