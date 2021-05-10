<?php
 
function linearSearch($arr, $x)
{
    $n = sizeof($arr);
    for($i = 0; $i < $n; $i++)
    {
        if($arr[$i] == $x)
            return $i;
    }
    return -1;
}
 
$arr = array(2, 5, 4, 10, 7);
$x = 10; // Element to be searched 
 
// Function call
$result = linearSearch($arr, $x);
if($result == -1)
    echo "Element is not present in array";
else
    echo "Element is present at index " . $result;