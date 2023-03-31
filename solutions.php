<?php

// $arr = [2, 7, 11, 15];
// $sum = 9;

// $arr = [3, 2, 4];
// $sum = 6;

// $arr = [3, 3];
// $sum = 6;

$arr = [2, 5, 5, 11];
$sum = 10;

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

// $ans = twoSum($arr, $sum);
// print_r($ans);


// GREATEST COMMON DIVISOR OF STRINGS

function countChars($strA, $strB) {

  $splitA = str_split($strA);
  $splitB = str_split($strB);

  function compareArrs($arr) {

    $words = [];
    $chars = [];

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

  $resultA = compareArrs($splitA);
  $resultB = compareArrs($splitB);

  $countA = count($resultA);
  $countB = count($resultB);

  if ($resultA[0] !== $resultB[0]) return "";

  $modulo = $countA % $countB;

  $prime = implode("", array($resultB[0]));
  $GCD = implode("", $resultB);

  return $modulo === 0 ? $GCD : $prime;
}

$abcabc = "ABCABC";
$abc = "ABC";

$abab = "ABABAB";
$ab = "ABAB";

$tauxxtauxx = "TAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXXTAUXX";
$tauxx = "TAUXXTAUXXTAUXXTAUXXTAUXX";

$leet = "LEET";
$code = "CODE";

// $solution = countChars($abcabc, $abc);
// print $solution;

// $solution = countChars($abab, $ab);
// print $solution;

// $solution = countChars($tauxxtauxx, $tauxx);
// print $solution;

$solution = countChars($leet, $code);
print $solution;

?>