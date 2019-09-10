<!--/*-->
<!--fopen()-used to open a file-->
<!--syntax fopen(filename,mode,inc_path,context)-->
<!--filename-name of file or url-->
<!--mode-in which mode want to open a fie i.e. read write etc-->
<!--inc_path-set this parameter to 1 or TRUE to specify that you want to search for the-->
<!--file in php include path-->
<!--context- context modify or enhance the behavior of the data stream from and to files-->
<!---->
<!--If the open operations fails it returns FALSE and an error on failure.-->
<!---->
<!-- MODES ON FILE HANDLING-->
<!-- -r -> open for reading only-->
<!-- -r+ -> open for reading and writting-->
<!-- -w -> open for writting only, if the file doesnot exist it create a file.-->
<!-- -w+ ->open for read and write-->
<!-- -a ->open for writing only, pointer at the end of the file, attempt to create,fseek() has no effect ,writes are always appended.-->
<!-- a+-> for reading and writting-->
<!-- x->create and open for writting only-->
<!-- x+->create and open for reading and writting-->
<!--c-->
<!--c+-->
<!---->
<!--*/-->
<!---->
<!---->
<!--//opening a file-->

<?php

//$open=fopen("","","","",)

$open=fopen("sagar.txt","r");

 if($open){
     echo "file opened .<br/>";
 }

?>

<!--
Reading files
.while loop
.feof() Function
.fgets() Function

feof()
-use for looping through data of unknown length
feof($open) ;

fgets()
used to read a single line from a file
fgets($file_handle,length)
fgets($open)
if no length specified the length default to 1024 bytes

-->

<?php
  $open= fopen("sagar.txt","r");
  //echo fgets($open);

  while(!feof($open)){
      $data = fgets($open);
      echo "$data <br/>";
  }

  ?>

<!-- Closing Of file
fclose();
-->

<?php
$open= fopen("sagar.txt","r");
//echo fgets($open);

while(!feof($open)){
    $data = fgets($open);
    echo "$data <br/>";
}
  fclose($open);
?>


<!-- Reading a file character by character
 fgetc();

 -->
<?php
$open= fopen("sagar.txt","r");
$char= fgetc($open);
echo $char."<br/>";

?>

<?php
$open= fopen("sagar.txt","r");
while($char= fgetc($open)){
    if($char == "\n"){
        $char = "<br/>";
    }
    echo $char;

}
fclose($open);

?>

<!--
Reading File at once
file_get_contents()
file_get_contents(filename,include_path,context,offset,maxlen)
str_replace() used to replace occurence of the search string with the replacement string
str_replace(search,replace,string,count)

-->

<?php
$data = file_get_contents("sagar.txt");
$repdata=str_replace("\n","<br/>",$data);
echo "<br/>".$data;
echo "<br/>".$repdata."<br/>";
?>

<!--Reading file into an array
file() function is used to read the entire file into an array
file(filename,inc_path,cotext)
-->
<?php
$data = file("sagar.txt");
print_r($data);
foreach($data as $line)
echo "<br/>".$line;

?>

<!-- file exist or not
file_exists("file name")
file size--filesize("filename")
-->

<!--
binary reads in php
-->

<?php
$open=fopen("sagar.txt","r");
//$data = fread($open,"10");
//echo "<br/>".$data;
$data = fread($open,filesize("sagar.txt"));
echo "<br/>".$data;
?>

<!--
Copy a file
copy(source_file,destination_file)
-->

<?php
   copy("sagar.txt","show.txt");
?>

<!--
Deleting a file
unlink() is used to delete a file
unlink(filename,context)
-->


<!--
fwrite()is used to write on a file
fwrite(file,string,length)
-->

<?php
$handle=fopen("show.txt","w");
fwrite($handle,"New Text");
?>

<!-- Apendding to files
can append using fwrite function but mode should be append mode i.e."a"
-->
<?php
$handle=fopen("show.txt","a");
fwrite($handle,"hello");
?>

<!-- Writting a file all at once
file_put_contents() is used to write string to a file
file_puts_contents()filename,data,flag,context)
flag can be either FILE_USE_INCLUDE_PATH or FILE_APPEND.
USe FILE_APPEND to avoid deleting content of the file.
no need of file handle

-->

<?php
//file_put_contents("show.txt","hey hey hey");
file_put_contents("show.txt","how are you",FILE_APPEND);
?>