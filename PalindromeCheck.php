<?php
$word = "level";
// Write a function to check if the given word is a palindrome (reads the same backward as forward).
$length = strlen($word);
$reverse = array();
for($i=$length-1; $i>=0; $i--)
{
    array_push($reverse,$word[$i]);
}
$check = implode("",$reverse);
if ($check == $word)
{
    echo $check." it is palindrome";
}
else
{
    echo ":P";
}
?>