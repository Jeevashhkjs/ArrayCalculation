<?php

$array = [
    [23, -1, 10, 98, -1], 
    [-1, 1, 2, 3, 4], 
    [12, 0, 66, 76, -1],
    [56, -1, 66, -1, 67], 
    [99, -1, 99, 99, -1]
];

// using Flag methods

$ouputArray = [];
$flag = false;
$sumCount = 0;
for($j=0;$j<count($array);$j++){
    for($i=0;$i<count($array[$j]);$i++){
        if($flag){
            if($array[$j][$i] == -1){
                $flag = false;
            }
            else{
                $sumCount += $array[$j][$i];
            }
        }
        else{
            if($array[$j][$i] == -1){
                $flag = true;
            }
        }
    }
    $ouputArray[] = $sumCount;
}
print_r("The index with maximum sum is ". (array_keys($ouputArray, max($ouputArray))[0]));
echo "\n";
print_r($ouputArray);


//Using Recursion method

/*

$outputArray = [];

$count = 0;

function findBiggestNumber($array){
    $GLOBALS['count']++;
    if($GLOBALS['count'] < count($array)){
        findBiggestNumber($GLOBALS['array'][$GLOBALS['count']]);
    }

    $indexArray = [];
    $values = [];
    for($i=0;$i<count($array);$i++){
        if($array[$i] == -1) {
            array_push($indexArray, $i);
        }
    }

    $lastIndex = count($indexArray);

    if($lastIndex == 1){
        $lastIndex = count($array);

    }else{
        $lastIndex = $indexArray[1];
    }

    for($k=0;$k<count($array);$k++){
        if($k>$indexArray[0] && $k<$lastIndex){
            array_push($values,$array[$k]);
        }
    }
    $output = array_sum($values);

    $GLOBALS['outputArray'][] = $output;




}
findBiggestNumber($array[$count]);
$revArray = array_reverse($outputArray);

$BiggestNumber = 0;
$getIndex = 0;
for($js=0;$js<count($revArray);$js++){
    if($revArray[$js] > $BiggestNumber){
        $BiggestNumber = $revArray[$js];
        $getIndex = ($js % 10);
    }
}

echo "The index with maximum sum is ".$getIndex."\n";
print_r($revArray);

*/
  
