<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW-PAGINATED.PHP

Displays all data from 'news' table

This is a modified version of view.php that includes pagination

*/



// connect to the database

include('connect-db.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$result = mysql_query("SELECT * FROM news");

$total_results = mysql_num_rows($result); //returns number of rows

$total_pages = ceil($total_results / $per_page); /*ceil rounds number up to integer. So 'total_results' rows / by 'per_page' (3) = total pages. Which creates the total number of pages which will each have 3 articles displayed on them. So if we have 6 articles this means we have 2 pages. */



// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page'])) //if 'page' keyword exists and has a number near it.

{

$show_page = $_GET['page']; //gets and stores the value "?page=1" basically everything after '?' because this creates a different instance of the page



// make sure the $show_page value is valid

if ($show_page > 0 && $show_page <= $total_pages) //Showpage= 'page=1' (or whatever number), this runs if it is greater than 0 and smaller or equal to the total pages.

$start = ($show_page -1) * $per_page; // gets the numeric value in the URL (show_page) -1 (itself) then * it by 3 to get the page the number would be on
$end = $start + $per_page; //This jumps to the end of the page?

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



echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> "; //hyperlink

for ($i = 1; $i <= $total_pages; $i++) //Loop. i starts at 1. It iterates up until it is equal to total_pages. 

{

echo "<a href='view-paginated.php?page=$i'>$i</a> "; //$i is inserted as the pagination. This creates a spread of hyperlinked numbers from 1 to the total_pages.

}

echo "</p>";



// display data in table

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>"; //1 row table with multiple columns storing the data. 



// loop through results of database query, displaying them in the table

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }



// echo out the contents of each row into a table
//$result selects all from the table, then $i picks one, and it must be an id

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'id') . '</td>';

echo '<td>' . mysql_result($result, $i, 'title') . '</td>';

echo '<td>' . mysql_result($result, $i, 'body') . '</td>';

echo '<td>' . mysql_result($result, $i, 'author') . '</td>';

echo '<td>' . mysql_result($result, $i, 'postdate') . '</td>';

echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '">Edit</a></td>'; /*the id of the edit href is filled in by collecting the cell that contains 'id' value in SQL table matching the $i incremental variable. $result is the array of SQL data which is manipulated.*/

echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'id') . '">Delete</a></td>';

echo "</tr>";

}

// close table>

echo "</table>";



// pagination



?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>