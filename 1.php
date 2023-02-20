<?php

function sortByLength($arr){
    $_newArray = array();
    $size = count($arr);
    
    for($i=0;$i<$size;$i++){
        $_newArray[strlen($arr[$i])] = $arr[$i];        
    }

    ksort($_newArray);
    printArray($_newArray);
}

function printArray($arr){
    foreach($arr as $item){
        echo "{$item} \n";
    }
}


$names = ["Lee","Karen","Leon","Wahid","Mustafa","Yu"];
sortByLength($names);


 
