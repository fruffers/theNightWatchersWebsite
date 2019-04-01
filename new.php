<?php

/*

NEW.PHP

Allows user to create a new entry in the database

*/



// creates the new record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($author, $title, $body, $postdate, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>New Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">
<div>

<table width="0%" cellspacing="2px" border="0" cellpadding="2px"> 
	<tr>
<td><strong>ID: * </strong></td>
<td><input type="number" name="id" value="<?php echo $id; ?>"/></td>
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

}









// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, start to process the form and save it to the database

if (isset($_POST['submit']))

{

// get form data, making sure it is valid

$id = mysql_real_escape_string(htmlspecialchars($_POST['id']));	

$author = mysql_real_escape_string(htmlspecialchars($_POST['author']));

$title = mysql_real_escape_string(htmlspecialchars($_POST['title']));

$body = mysql_real_escape_string(htmlspecialchars($_POST['body']));

$postdate = mysql_real_escape_string(htmlspecialchars($_POST['postdate']));


// check to make sure both fields are entered

if ($author == '' || $title == '' || $body == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



// if either field is blank, display the form again

renderForm($author, $title, $body, $postdate, $error);

}

else

{

// save the data to the database

mysql_query("INSERT news SET id='$id', author='$author', title='$title', body='$body', postdate='$postdate'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

// if the form hasn't been submitted, display the form

{

renderForm('','','');

}

?>