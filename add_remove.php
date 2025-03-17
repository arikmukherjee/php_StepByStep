<?php
$arr = [1,2,3];
array_push($arr,5,"ARIK");

echo "<pre>";
print_r($arr);
echo "</pre>";

// Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 5 [4] => ARIK )
array_pop($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";
?>