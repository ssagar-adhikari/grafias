<?php

function func(){

    $a=0;
    $a++;
    return $a;
}

echo func() ."<br/>";
echo func() ."<br/>";
echo func() ."<br/>" ."<br/>";


function staticfunc(){

    static $a=0;
    $a++;
    return $a;
}

echo staticfunc() ."<br/>";
echo staticfunc() ."<br/>";
echo staticfunc();
