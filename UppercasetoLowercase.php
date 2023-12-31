<?php
$mixedCase = "MiXeDcAsE";
// Use a loop to convert uppercase letters to lowercase and vice versa, then print the result.
$length = strlen($mixedCase);
for($i = 0; $i < $length; $i++)
{
    echo strtolower($mixedCase[$i]);
}
?>