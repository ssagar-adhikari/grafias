<--! A session is way to store information (in variables) to be used across multiple pages

how session works

session_start()-> session available?->if no->(store a cookie on a client machine,
Cookie_Name -PHPSESSID,Content-SessionID),(Store a file on a server ,Name-SESS_SEssionID,Content-Session_Variable)

if session available is true (It matches the PHPSESSID cookie Session ID with Server file->
if both match->All Session variables are available

session_start()-It creates/starts a seddion or resume the current one based on a session identifier passed via
a GET or POST request, or passed via a cookie

the session_start() function must be the very first thing in your  document , before any tml tags.

//How  GET AND SET Session Variables

SET SESSION VARIABLES

session variables are set with the PHP global variable $_SESSION. Theses variables can be accessed during lifetime of a session

$SESSION['time']=time();

GET/Acsess session Variables

Session variables are stored in the PHP global variable $_SESSION.
$_SESSION['time'];

-->



