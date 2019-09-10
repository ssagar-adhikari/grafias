<!--
generalization of an error to include any unexpected condition encountered during execution
Exception Handling
.try
.throw
.catch
finally

-->

<?php

$a =8;
try{
    if($a>=10){
        echo $a ."<br/>";

    }
    else{
        throw new Exception("Enter Value Greater than 10");
    }
}
catch (Exception $e){
    echo $e->getMessage();
}
finally {
    echo "finally block";
}