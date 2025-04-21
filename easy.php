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

function twoSum($nums, $target)
{
    $length = count($nums);
    $new = [];

    for ($i = 0; $i < $length; $i++) {
        // print $i;
        print "i: $i \n";

        for ($j = $i + 1; $j < $length; $j++) {
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

function countChars($strA, $strB)
{
    // String is passed through as $elem

    // str_split(): splits a word down into letters and places each letter into an array
    $splitA = str_split($strA);
    $splitB = str_split($strB);
    // $arr = $split;

    // $matchCheck = array_intersect($splitA, $splitB);
    // print "Match Check: \n";
    // print_r($matchCheck);

    function compareArrs($arr)
    {
        $words = [];
        $chars = [];

        // count(): counts all elements (aka letters) in the array
        $length = count($arr);
        $last = $length - 1;

        // A for loop that iterates through each letter in the current array to recognize potential word patterns:
        for ($i = 0; $i < $length; $i++) {
            // If the current iteration is zero, push the first letter into a 2nd (empty) array ($chars):
            if ($i === 0) {
                array_push($chars, $arr[0]);
            }

            // If the current iteration is the final instance ...
            if ($i === $last) {
                // ... push the last letter into the given array ($chars):
                array_push($chars, $arr[$i]);

                // ... then convert that letter (plus any others in the array) back into a string/word ($group):
                $group = implode("", $chars);

                // ... then push the new word into a 3rd array ($words):
                array_push($words, $group);

                // Reset the 2nd array
                $chars = [];
            }

            // If it's not the final iteration AND the current letter *doesn't* match the first letter, then push the current letter into the 2nd array ($chars):
            if ($i !== $last && $arr[$i] !== $arr[0]) {
                array_push($chars, $arr[$i]);
            }

            // If it's not the first iteration AND the current letter *does* match the first letter ...
            if ($i !== 0 && $arr[$i] === $arr[0]) {
                // ... combine any existing letters in the 2nd array ($chars) into a string/word:
                $group = implode("", $chars);

                // ... the push that string/word into the 3rd array ($words):
                array_push($words, $group);

                // Reset the 2nd array ...
                $chars = [];

                // ... then push the current letter into the 2nd (empty) array ($chars):
                array_push($chars, $arr[$i]);
            }
        }
        return $words;
    }

    $resultA = compareArrs($splitA);
    print "1st Array: \n";
    print_r($resultA);
    print "1st Array 1st Index: \n";
    print_r($resultA[0]);
    print "\n";
    $resultB = compareArrs($splitB);
    print_r($resultB);

    $countA = count($resultA);
    print "$countA \n \n";
    $countB = count($resultB);
    print "$countB \n \n";

    if ($resultA[0] !== $resultB[0]) {
        return "";
    }

    $modulo = $countA % $countB;

    $prime = implode("", [$resultB[0]]);
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

// $solution = countChars($leet, $code);
// print $solution;

function romanToInt($roman)
{
    $numerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $romanChars = str_split($roman);
    print_r($romanChars);

    $key = 0;

    $number = array_reduce(
        $romanChars,
        function ($acc, $char) use ($numerals, $romanChars, &$key) {
            print "Current Char: $char \n";
            print "Current Key: $key \n";

            print "$numerals[$char] \n";

            if ($key > 0) {
                // print "$romanChars[$key] \n";
                print $romanChars[$key - 1];

                $hasOne = str_contains((string) $numerals[$romanChars[$key - 1]], (string) '1');

                // print "$hasOne \n";
            } else {
                print $romanChars[$key + 1];
            }

            $key += 1;

            // $acc += $numerals[$char];
            // print $acc;
        },
        0
    );
}

$solution = romanToInt("III");

?>
