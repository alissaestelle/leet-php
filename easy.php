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

// $ans = twoSum($arr2, $sum2);
// print_r($ans);

// GREATEST COMMON DIVISOR OF STRINGS

function countChars($elem) {

  $chars = [];
  $words = [];

  $split = str_split($elem);
  $arr = $split;

  $length = count($arr);
  $last = $length - 1;

  for($i = 0; $i < $length; $i++) {

    if ($i === 0) array_push($chars, $arr[0]);
    if ($i === $last)
    {
      array_push($chars, $arr[$i]);
      $group = implode("", $chars);
      array_push($words, $group);
      $chars = [];
    }

    if ($i !== $last && $arr[$i] !== $arr[0]) array_push($chars, $arr[$i]);
    if ($i !== 0 && $arr[$i] === $arr[0]) 
    {
      $group = implode("", $chars);
      array_push($words, $group);
      $chars = [];
      array_push($chars, $arr[$i]);
    }
  }
  return $words;
}

$abcabc = "ABCABC";
$abc = "ABC";

$abab = "ABABAB";
$ab = "ABAB";

$tauxxtauxx = "TAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXX";
$tauxx = "TAUXXTAUXXTAUXXTAUXXTAUXX";

$leet = "LEET";
$code = "CODE";

// $solution1 = countChars($abcabc);
// print_r($solution1);
// $solution2 = countChars($abc);
// print_r($solution2);


// $solution1 = countChars($abab);
// print_r($solution1);
// $solution2 = countChars($ab);
// print_r($solution2);

// $solution1 = countChars($tauxxtauxx);
// print_r($solution1);
// $solution2 = countChars($tauxx);
// print_r($solution2);

$solution1 = countChars($leet);
print_r($solution1);
$solution2 = countChars($code);
print_r($solution2);

?>