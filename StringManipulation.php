<?php
$text = "The quick brown fox";
// Write a function to replace the word "quick" with "lazy" in the given text and print the result.
$word = "quick";
$replace = "lazy";
$length = strlen($text);
for($i=0; $i<=$length; $i++)
{
    $check = substr($text, $i, strlen($word));
    if($check == $word)
    {
        $text = substr_replace($text, $replace, $i, strlen($word));
        break;
    }
}
echo $text;
?>