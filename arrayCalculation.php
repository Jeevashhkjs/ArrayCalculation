<?php

$array = [
    [12, -1, 1, 1, -1], // => 2
    [12, -1, 66, 4, 0], // => 70
    [12, 0, 66, 76, -1], // => 0
    [-1, 1, 2, 3, 4], // => 10
    [56, -1, 66, -1, 67], // => 66
];

for($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array);$j++){
        if($array[$i][$j] == -1){
            print_r($j);
        }
    }
}

//$count = 0;
//
//function findBiggestNumber($array){
//    $GLOBALS['count']++;
//    if($GLOBALS['count'] < count($array)){
//        findBiggestNumber($array);
//    }
//
//    $indexArray = [];
//    $values = [];
//    for($i=0;$i<count($array);$i++){
//        if($array[$i] == -1) {
//            array_push($indexArray, $i);
//        }
//    }
//
//    $lastIndex = count($indexArray);
//
//    if($lastIndex == 1){
//        $lastIndex = count($array);
//
//    }else{
//        $lastIndex = $indexArray[1];
//    }
//
//    for($k=0;$k<count($array);$k++){
//        if($k>$indexArray[0] && $k<$lastIndex){
//            array_push($values,$array[$k]);
//        }
//    }
//    $output = array_sum($values);
//    echo $output;
//}
//
//findBiggestNumber($GLOBALS['array']);

//print_r($indexArray);

