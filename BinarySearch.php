<?php
  
function binarySearch(Array $arr, $x)
{
    // check for empty array
    if (count($arr) == 0) 
        return false;
    $low = 0;
    $high = count($arr) - 1;
      
    while ($low <= $high) {
          
        // calculate middle index
        $mid = floor(($low + $high) / 2);
   
        // element found at mid
        if($arr[$mid] == $x) {
            return true;
        }
  
        if ($x < $arr[$mid]) {
            // search the left side of the array
            $high = $mid -1;
        }
        else {
            // search the right side of the array
            $low = $mid + 1;
        }
    }
    // If we reach here element x doesnt exist
    return false;
}
  
$arr = array(10, 20, 30, 40, 50);
$value = 40; // Element to be searched 
echo "Original Array : \n";
echo implode(', ',$arr);
if(binarySearch($arr, $value) == true) {
    echo "\n".$value." Exists";
}
else {
    echo "\n".$value." Doesnt Exist";
}