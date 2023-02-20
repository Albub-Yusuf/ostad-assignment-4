<?php

function secondLargestNumber($arr){
    sort($arr);
    return $arr[count($arr)-2];
}

$secondLargestNumber = secondLargestNumber([5,88,9,6,81,55,99,101,509,898]);
echo $secondLargestNumber;
