<?php
// Write a function to calculate the factorial of a given number (e.g., 5! = 5 * 4 * 3 * 2 * 1).
$var = 4;
$fac = 1;
for($i = $var; $i >=1; $i--)
{
    $fac *= $i;
}
echo $fac;
?>