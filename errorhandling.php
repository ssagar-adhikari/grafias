<!--process of finding the error and taking the appropiate action to fix the error
Methods of error handling
.die() method
custom error or error triggers

-->

<?php
//
//if(!file_exists("hello.txt"))
//{
// die("not found");
//}
//else{
//    $file=fopen("hello.txt","r");
//}
//?>

<!--
Custom Error handler

Function:
  error_function(error_level*,error_message*,error_file,error_line,error_context)
-->


<?php
function myfunction($errno,$errstr){

    echo"<b>ERROR:</b> [$errno] $errstr <br>";
    echo"End Script";
    die();
}
set_error_handler(myfunction);
echo($test);

?>