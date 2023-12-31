<?php
$input = "abc";
// Use a loop to print each character in the input string three times.
for ($i = 0; $i < strlen($input); $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $input[$i];
    }
}
?>