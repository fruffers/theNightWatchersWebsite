<!DOCTYPE html>
<html>

<head>
    <!--imports!-->
    <link rel="stylesheet" type="text/css" href="siteStyle.css">
    <?php include('mainHeader.php'); ?>
    <?php include('highlightFunc.php'); ?>

	<style>

	.textBox h2 {
		       text-decoration: underline;
				color: #6c3877;
	}
		.textBox { /*title color of the news*/
            
            /*text-transform: uppercase;*/
			background-color: black;
			border: solid 5px grey; 
			color: white;
        }

        .publishTime {
            padding-bottom: 5px;
            font-size: 10px;
            color: grey;
        }

        .newsHeader {
            font-size: 140%; /*this has problems resizing on a small screen. It spills over textBox*/
            font-weight: bold;
            line-height: 1;
            padding: 2px;
        }

        .topHeader {
            font-size: 30px;
            font-weight: bold;
            text-decoration: underline;
            text-transform: uppercase;
            color: #6c3877;
            height: 100px;
            width: auto;
            bottom: 50px;
            align-content: center;
        }

        .bottomButton {
            background-color: #6c3877;
            color: #1f1c26;
            width: 60px;
            padding: 8px;
            border-radius: 6px;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 10px;
            float: right;
            margin: 10px;
            right: 50px;
       
            
        }

        .bottomButton:hover {
            background-color: slateblue;
        }
</style>
</head>

<body>
<?
// load the configuration file.

include("config.php");
        //load all news from the database and then OREDER them by newsid
        //you will notice that newly added news will appear first.
        //also you can ORDER by (dtime) instead of (news id)
        $result = mysql_query("SELECT * FROM news ORDER BY newsid DESC",$connect); //store in $results. DESC = descending

        //lets make a loop and get all news from the database
        while($myrow = mysql_fetch_assoc($result)) //fetches array named $result previously stored in mysql_query
             {//begin of loop

               //now print the results:
               echo "&lt;b&gt;Title: ";
               echo $myrow['title'];
               echo "&lt;/b&gt;&lt;br&gt;On: &lt;i&gt;"; // </b><br> on: <i>
               echo $myrow['dtime'];
               echo "&lt;/i&gt;&lt;hr align=left width=160&gt;"; // <i><hr align=... width=...>
               echo $myrow['body'];

               // Now print the options to (Read,Edit & Delete the news)
               echo "&lt;br&gt;&lt;a href=\\"read_more.php?newsid=$myrow[newsid]\\"&gt;Read More...&lt;/a&gt;
                || &lt;a href=\\"edit_news.php?newsid=$myrow[newsid]\\"&gt;Edit&lt;/a&gt;
                 || &lt;a href=\\"delete_news.php?newsid=$myrow[newsid]\\"&gt;Delete&lt;/a&gt;&lt;br&gt;&lt;hr&gt;";

             }//end of loop

			 ?>


</body>



    <?php include('mainFooter.php'); ?>

</html>


