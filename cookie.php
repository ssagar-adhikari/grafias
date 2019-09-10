
<!--

Types of cookies

.Session Cookies
.Persistent Cookies

Creating Cookie

setCookie()-> is used to set cookies.This function must appear before the html tag
setCookie(name,value,expire,path,domain,secure,httponly);

name and value is required to set cookie



-->

<?php
//setcookie("username","sagar");
//
//?>

<!--

Reading cookies
$_COOKIE is used to read cookie
$_COOKIE['name'];


-->

<?php
//setcookie("username","sagar");
//echo $_COOKIE['username'];
//
//?>

<!--
replace and append cookie
-->
<?php
setcookie("username","sagar");
setcookie('username','ashok');//replace the cookie
setcookie('userid','thapa');//append cookie


?>

<!--
 DELETING COOKIES

 -->