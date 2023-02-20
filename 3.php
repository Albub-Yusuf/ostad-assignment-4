<?php

function removeFirstLastElement($arr){

    $_arr = $arr;
    array_shift($_arr);
    array_pop($_arr);
    return $_arr;
}


$fruits = ["mango","banana","apple","grapes","cherry","citrus"];
print_r(removeFirstLastElement($fruits));

