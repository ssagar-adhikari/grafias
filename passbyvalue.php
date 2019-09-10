<?php

$n=2;
echo "value of n = $n <br/>";

function pbv($a)
{
    echo "value inside the function $a <br/>";
    $a=4;
    echo "value inside the function $a <br/>";

}

pbv($n);

echo "value of n =$n  <br/> <br/>";

function pbr(&$a)
{
    echo "value inside the function $a <br/>";
    $a=4;
echo "value inside the function $a <br/>";

}

pbr($n);

echo "value of n =$n  <br/>";