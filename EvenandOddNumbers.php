<?php
// Create an array of numbers (e.g., 1 to 10).
// Use a loop to separate even and odd numbers into two arrays and print both arrays.

$numbers = array(1,2,3,4,5,6,7,8,9);
$length = count($numbers);
$even = array();
$odd = array();
for($i = 0; $i < $length; $i++)
{
    if($numbers[$i] % 2 == 0)
    {
        array_push($even,$numbers[$i]);
    }
    else
    {   
        array_push($odd,$numbers[$i]);
    }
}
echo "These are odd numbers ".implode(",",$odd).'<br>';
echo "These are even numbers ".implode(",",$even);
?>