<?

$dbhost="sql207.infinityfreeapp.com";
$dbusername="epiz_20905967";
$dbpassword="ET6zHANOpTD9";
$dbname="epiz_20905967_newsDB2";

$connect = mysql_connect($dbhost, $dbusername, $dbpassword);
mysql_select_db($dbname,$connect) or die ("Could not select database");

?>
