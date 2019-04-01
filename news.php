<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

 <!--imports!-->
    <link rel="stylesheet" type="text/css" href="siteStyle.css">
    <?php include('mainHeader.php'); ?>
    <?php include('highlightFunc.php'); ?>
<title>News</title>

</head>

<body>

<h1>News</h1>

<?php

/*


Displays all data from 'news' table

This is a modified version of view.php that includes pagination

*/



// connect to the database

include ('news_database/connect-db.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$result = mysql_query("SELECT * FROM news");

$total_results = mysql_num_rows($result);

$total_pages = ceil($total_results / $per_page);



// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];



// make sure the $show_page value is valid

if ($show_page > 0 && $show_page <= $total_pages)

{

$start = ($show_page -1) * $per_page;

$end = $start + $per_page;

}

else

{

// error - show first set of results

$start = 0;

$end = $per_page;

}

}

else

{

// if page isn't set, show first set of results

$start = 0;

$end = $per_page;

}



// display pagination



for ($i = 1; $i <= $total_pages; $i++)

{

echo "<a href='news.php?page=$i'>$i</a> ";

}


// loop through results of database query, displaying them in the table

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }


echo "</br>" . "</br>" . "</br>" . "<div class=centerBox>" . "</br>";

echo "<div class=textBox>";

echo "<h2>" . mysql_result($result, $i, 'title') . "</h2>";

echo "<small>" . mysql_result($result, $i, 'author');

echo " , " . '&nbsp' . mysql_result($result, $i, 'postdate');

echo " , " . mysql_result($result, $i, 'id') . "</small>" . "</br>";

echo "</br>" . mysql_result($result, $i, 'body') . "</br>" . "</br>";

echo "</div>" . "</br>";

echo "</div>" . "</br>";

}

// close table>

echo "</table>";



// pagination



?>



<?php include('mainFooter.php'); ?>
</body>

</html>