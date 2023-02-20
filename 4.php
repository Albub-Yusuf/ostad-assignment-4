<?php


function hasNumerOrSpecialChars($string){


    $newString =  preg_split('/ ^[a-zA-Z\s]| /',$string);

 
    for($i=0;$i<count($newString);$i++){
        if(is_numeric($newString[$i]) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬]/', $newString[$i])){
           return true;
        }
    }
    
}


$string1 = "hello 123 +* ";
$string2 = "welcome to the world of php ";

// test values
if(hasNumerOrSpecialChars($string1)){
    echo "false \n";
}else{
    echo "true \n";
}

if(hasNumerOrSpecialChars($string2)){
    echo "false \n";
}else{
    echo "true \n";
}


