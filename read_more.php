<?
include("config.php");

        $result = mysql_query("SELECT * FROM news WHERE newsid='$newsid' ",$connect); //fetch only news you meant to using newsid stored in it and the table
        while($myrow = mysql_fetch_assoc($result))

             {
                     echo "&lt;b&gt;";
                     echo $myrow['title'];
                     echo "&lt;/b&gt;&lt;br&gt;On: &lt;i&gt;";
                     echo $myrow['dtime'];
                     echo "&lt;/i&gt;&lt;hr&gt;";
                     echo $myrow['body'];
                     echo " ";
                     echo $myrow['author'];
                     echo "&lt;br&gt;&lt;br&gt;&lt;a href=\\"javascript:self.history.back();\\"&gt;&lt;-- Go Back&lt;/a&gt;";

             }
?>