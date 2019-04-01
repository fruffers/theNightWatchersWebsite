<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $postdate, $author, $title, $body, $error) //this is a function with parameters

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post"> <!--action is empty because the form is not being sent anywhere-->

<input type="hidden" name="id" value="<?php echo $id; ?>"/> <!-- id cannot be edited -->

<div>

<table width="0%" cellspacing="2px" border="0" cellpadding="2px"> 
<p><strong>ID: </strong> <?php echo $id; ?></p> <!--no input because we can't edit this-->
<div>
	<tr>
<td><strong>Author: *</strong></td> 
	<td><input type="text" name="author" value="<?php echo $author; ?>" /></td>
	<tr>
<td><strong>Title: *</strong></td> 
	<td><input type="text" name="title" value="<?php echo $title; ?>" /></td>
	<tr>
<td><strong>Body: *</strong></td>
	<td><textarea input name="body" value="<?php echo $body; ?>"></textarea></td>
	<tr>
<td><strong>Date: </strong></td> 
	<td><input type="date" name="postdate" value="<?php echo $postdate; ?>" /><td>
	<tr>
<p>* required</p>
	<tr>
<td><input type="submit" name="submit" value="Submit"></td>
</table>

</div>

</form>

</body>

</html>

<?php

} //end of function







// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$postdate = $_POST['postdate'];

$author = mysql_real_escape_string(htmlspecialchars($_POST['author']));

$title = mysql_real_escape_string(htmlspecialchars($_POST['title']));

$body = $_POST['body'];



// check if fields are not filled

if ($author == '' || $title == '' || $body == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $postdate $author $title, $body, $error); //plug parameters into function

}

else

{

// save the data to the database

mysql_query("UPDATE news SET author='$author', title='$title', body='$body', postdate='$postdate' WHERE id='$id'") //WHERE makes sure that only the existing entry is edited by using its $id. 

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] >= 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM news WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result); //put all in the entry row into an array and store in $row variable



// check that the 'id' matches up with a row in the databse

if($row) //exists

{



// get data from db

$author = $row['author']; //values are accessed by their name because $row is an associative array

$title = $row['title'];

$body = $row['body'];

$postdate = $row['postdate'];



// show form

renderForm($id, $postdate, $author, $title, $body, ''); //error is empty

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>