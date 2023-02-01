<?php

// $arr = [2, 7, 11, 15];
// $sum = 9;

// $arr = [3, 2, 4];
// $sum = 6;

// $arr = [3, 3];
// $sum = 6;

$arr = [2, 5, 5, 11];
$sum = 10;

// 

function twoSum($nums, $target) {
  $length = count($nums);
  $new = [];

  for($i = 0; $i < $length; $i++) {
    for($j = $i + 1; $j < $length; $j++) {
    
    $sum = $nums[$i] + $nums[$j];
    
    if ($sum == $target) {
      array_push($new, $i, $j);
      break 2;
    }
    }
  }
  return $new;
}

$ans = twoSum($arr, $sum);
print_r($ans);

?>