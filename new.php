<?php

$array = [
    [12, -1, 1, 1, -1], // => 2
    [12, -1, 66, 4, 0], // => 70
    [12, 0, 66, 76, -1], // => 0
    [-1, 1, 2, 3, 4], // => 10
    [56, -1, 66, -1, 67], // => 66
];


$allSums = [];
for ($m = 0; $m <= count($array) - 1; $m++) {
    $found = false;
    $sum = 0;
    for ($i = 0; $i <= count($array[$m]) -1 ; $i++) {
        if ($found) {
            if ($array[$m][$i] === -1) {
                $found = false;
                break;
            } else {
                $sum += $array[$m][$i];
            }
        }

        if ($array[$m][$i] === -1) {
            $found = true;
        }
    }
    $allSums[] = $sum;
}

print_r("The index with maximum sum is ". (array_keys($allSums, max($allSums))[0]));
echo "\n";
print_r($allSums);