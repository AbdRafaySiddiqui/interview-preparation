<?php
$var = "siddiqui";
$rev = strrev($var);
echo $rev;
?>
<br>
<?php
$length = strlen($var);
for($i=$length - 1; $i>=0; $i--)
{
    echo $var[$i];
}
?>
<br>
<?php
$r=$length - 1;
while($r >= 0)
{
    echo $var[$r];
    $r--;
}
?>