<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $author, $postdate, $title, $body, $error)

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



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

<strong>Postdate: </strong> <input type="date" name="postdate" value="<?php echo $postdate; ?>"/><br/>

<strong>Author: *</strong> <input type="text" name="author" value="<?php echo $author; ?>"/><br/>

<strong>Title: *</strong> <input type="text" name="title" value="<?php echo $title; ?>"/><br/>

<strong>Body: *</strong> <textarea><input name="body" value="<?php echo $title; ?>"/><br/></textarea>

<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}







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



// check that firstname/lastname fields are both filled in

if ($author == '' || $title == '' || $body =='')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $author, $postdate, $title, $body, $error);
}

else

{

// save the data to the database

mysql_query("UPDATE news SET author='$author', postdate='postdate', title='$title', body='body'  WHERE id='$id'")

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

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$author = $row['author'];

$postdate = $row['postdate'];

$title = $row['title'];

$body = $row['body']



// show form

renderForm($id, $author, $postdate, $title, $body, '');

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