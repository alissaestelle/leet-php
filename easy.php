<?php

// TWO SUM: ATTEMPT NO. 1

/*

function twoSum($nums, $target) {
  $length = count($nums);
  $new = [];

  for($i = 0; $i < $length; $i++) {
    $j = 1;

    while ($j < $length) {
      // for($j = 1; $j < $length; $j++) {
      $sum = $nums[$i] + $nums[$j];

      if ($sum == $target) {
        array_push($new, $i, $j);
        break 2;
      }
      $j++;
      // $sum == $target ? array_push($new, $i, $j) : NULL;
    }
  }
  return $new;
}

*/

$arr1 = [2, 7, 11, 15];
$sum1 = 9;

$arr2 = [2, 5, 5, 11];
$sum2 = 10;

function twoSum($nums, $target) {

  $length = count($nums);
  $new = [];

  for($i = 0; $i < $length; $i++) {
    // print $i;
    print "i: $i \n";

    for($j = $i + 1; $j < $length; $j++) {
    // print $j;
    print "j: $j \n \n";

    print "nums[i]: $nums[$i] \n";
    print "nums[j]: $nums[$j] \n";

    $sum = $nums[$i] + $nums[$j];
    print "Sum: $sum \n \n";
    
    if ($sum == $target) {
      array_push($new, $i, $j);
      break 2;
    }
    }
  }
  return $new;
}

$ans = twoSum($arr2, $sum2);
print_r($ans);

// GREATEST COMMON DIVISOR OF STRINGS

function countChars() {
  $first = "ABCABC";
  $second = "ABC";

  $test = ["A", "B", "C"];
  $chars = [];
  $words = array();
  $j = 1;

  $split = str_split($first);
  // $split = str_split($first, 3);
  $arr = $split;
  print_r($arr);

  $length = count($arr);

  $join = implode("", $test);
  print "$join \n \n";

  for($i = 0; $i < $length; $i++) {
    // Make Copy of Array??
    $arr[$i] === $arr[$j] ? print_r(array_chunk($arr, $j)) : '';
    $j++;


    // $i === 0 ? array_push($chars, $arr[0]) : '';
    
    // for($j = 1; $j < $length; $j++) {
      // $arr[$i] === $arr[$j] ? implode("", $chars) && array_push($words, $chars) : array_push($chars, $arr[$i]);
    // }
    print_r($words);
  }
}

countChars();

?>