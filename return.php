<?php

function add($a,$b){
    $sum=$a+$b;
    $diff=$a-$b;
    return [$sum,$diff];

}

 print_r(add(5,5));
