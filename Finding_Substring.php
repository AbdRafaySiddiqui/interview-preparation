<?php
$text = "The quick brown fox jumps over the lazy dog.";
// Use a loop to check if the word "fox" is present in the text and print the result.
$length = strlen($text);
$find = "quick";
$find_length = strlen($find);
$found = false;
for($i = 0; $i < $length; $i++)
{
    $sub = substr($text, $i, $find_length);
    if(strcasecmp($sub, $find) === 0)
    {
        $found = true;
        break;
    }
}
if($found)
{
    echo $found.$find;
}
else
{
    echo ":P";
}
?>