<?php

/*

CONNECT-DB.PHP

Allows PHP to connect to your database

*/



// Database Variables (edit with your own server information)

$server = 'sql207.epizy.com';

$user = 'epiz_20905967';

$pass = 'ET6zHANOpTD9';

$db = 'epiz_20905967_news';



// Connect to Database

$connection = mysql_connect($server, $user, $pass)

or die ("Could not connect to server ... \n" . mysql_error ()); //append error

mysql_select_db($db)

or die ("Could not connect to database ... \n" . mysql_error ());





?>