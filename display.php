<!DOCTYPE html>
<html lang="en">

  <head>
    <title>SimpleCMS</title>
  </head>

  <body>

  <?php

	include_once('simpleCMS.php');
	$obj = new simpleCMS(); //create instance of class
	$obj->host = 'sql207.epizy.com'; // object operator '->' accesses methods/properties from class
	$obj->username = 'epiz_20905967';
	$obj->password = 'ET6zHANOpTD9';
	$obj->table = 'epiz_20905967_testDB';
	$obj->connect();

	if ( $_POST ) //check if any data was passed into POST
		$obj->write($_POST); //if it was run the write method on it
		//add a password to this
	echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public(); //if admin = 1 then show the admin form, else show the stored entries using public method
	?>

	
  </body>

</html>