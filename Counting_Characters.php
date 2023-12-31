<?php
$sentence = "This is a sample sentence.";
// Use a loop to count and print the number of vowels in the sentence.
$length = strlen($sentence);
$count = 0;
for($i = 0; $i <= $length -1; $i++)
{
    $char = strtolower($sentence[$i]);
    if($char == "a" || $char == "e"|| $char == "i"|| $char == "o"|| $char == "u")
    {
        $count++;
    }
}
    if($count > 0)
    {
        echo $count;
    }
    else
    {
        echo "No vowels found";
    }
?>