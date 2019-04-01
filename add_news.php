<html>
<head>
<?
include("config.php");

  if($submit)
  {//begin if submit button is clicked

      // Set global variables to easier names
     //this will pervent sql injection and apostrophe to break the db.
      $title = mysql_real_escape_string($_POST['title']);
      $body = mysql_real_escape_string($_POST['body']);
      $author = mysql_real_escape_string($_POST['author']);


              //check if (title) field is empty then print error message.
              if(!$title){  //this means If the title is really empty.
                     echo "Error: News title is a required field. Please fill it.";
                     exit(); //exit the script and don't do anything else.
              }// end of if
         //run the query which adds the data gathered from the form into the database
         $result = mysql_query("INSERT INTO news (title, dtime, body, author)
                       VALUES ('$title',NOW(),'$body','$author')",$connect);
          //print success message.'$connect' is from the config.php file
          echo "&lt;b&gt;Thank you! News added Successfully!&lt;br&gt;You'll be redirected to News page after (4) seconds";
          echo "&lt;meta http-equiv=Refresh content=4;url=news.php&gt;"; //redirects to news.php after 4 secs
  } //&lt; is making a < sign to create a html tag which can be used to add function to the attribute. The names are used otherwise the browser will mix the <> signs with tags
  //end of if($submit).


  // If the form has not been submitted, display it
else ?>
    </head>
      <body>
      <br>
      <h3>Add News<h3>

     <form method="post" action="<?php echo $PHP_SELF ?>"> <!--$PHP_SELF uses current URL as action for form so PHP script running on the page is assigned to handle the form -->
      Title:<input name="title" size="40" maxlength="255">
     <br>
      Body:<textarea name="body"  rows="7" cols="30"></textarea>
     <br>
      Author:<textarea name="author" rows="1" cols="20"></textarea>
     <br>
     <input type="submit" name="submit" value="Add News">
     </form>
  
  

  </body>

  </html>