<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW.PHP

Displays all data from 'news' table

*/



// connect to the database

include('connect-db.php');



// get results from database

$result = mysql_query("SELECT * FROM news") //get all from table using sql query

or die(mysql_error());



// display data in table

echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>"; //link to paginated version/file... By adding the ?page=1 to the end this sets up the script in the file to work. It will single out the 'page' in the url. 



echo "<table border='1' cellpadding='10'>"; //make table

echo "<tr> <th>ID</th> <th>Date</th> <th>Author</th> <th>Title</th> <th>Body</th></tr>"; //fill table



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) { //$result stores all in the table



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['postdate'] . '</td>';

echo '<td>' . $row['author'] . '</td>';

echo '<td>' . $row['title'] . '</td>';

echo '<td>' . $row['body'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>'; //puts a link in each row and gives each element a #id identical to the id of the row it is in

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>