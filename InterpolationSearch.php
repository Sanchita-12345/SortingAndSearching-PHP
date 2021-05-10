<?php 

function interpolationSearch($arr, $x, $n) 
{ 
    // Find indexes of two corners 
    $low = 0; 
    $high = $n - 1; 
      
    // Since array is sorted, an element present in array must be in range defined by corner 
    while ($low <= $high and $x >= $arr[$low] and $x <= $arr[$high]) { 
        if ($low == $high) { 
              if ($arr[$low] == $x) return $low; 
              return -1; 
        } 
        // Probing the position with keeping uniform distribution in mind
        $m = intval($low + (($x - $arr[$low]) * ($high - $low) /  ($arr[$high] - $arr[$low]))); 
          
        // Condition of target found 
        if ($arr[$m] == $x)  
        { 
            return $m; 
        } 
          
        // If x is larger, x is in upper part 
        elseif ($arr[$m] < $x) 
        { 
            $low = $m + 1; 
        }  
          
        // If x is smaller, x is in the lower part 
        else
        { 
            $high = $m - 1; 
        } 
    } 
      
    return -1; 
} 
    
$arr = array(10, 12, 13, 16, 18, 19, 20, 21, 22, 23, 24, 33, 35, 42, 47);  
$n = count($arr);  
$x = 20; // Element to be searched  
$index = interpolationSearch($arr, $x, $n);  
  
// If element was found 
if ($index != -1)  
    echo "Element found at index " . $index;  
else
    echo "Element not found";  