<?php

$a=10;
function display(){

    global $a;
    echo "accessing inside the function .$a .<br/> ";
}

display();
echo "accessing outside the function .$a <br/>";



function ldisplay(){

    $a=20;
    echo "accessing inside the function .$a .<br/> ";
}

ldisplay();
echo "accessing outside the function .$a";