<!DOCTYPE html>
<!--
Sign Out page
Last Modified: 3.24.21
@author cfresquez, ckarnas
-->

<?php     
session_start();

// the cookie that holds the session id is destroyed

if (isset($_COOKIE[session_name()]))
{
    setcookie(session_name(),"",time()-3600); //destroy the session cookie on the client
}

$_SESSION = array(); // unset or remove all data from the $_SESSION array
session_destroy(); //erase session data from the disk
session_write_close(); // make sure the changes are committed

header('Refresh: 2; URL=Home.php');

echo '<h2>You have been signed out. Redirecting to home page...</h2>';

die();

?>
   
