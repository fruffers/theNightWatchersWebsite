<!DOCTYPE html>
<html>
<!--imports!-->

<head>
<title>Comic</title>
<link rel="stylesheet" type="text/css" href="comicStyle.css">
<?php include('comicHeader.php'); ?>

<?php include('highlightFunc.php'); ?>
</head>


<!------------------------page center-------------------------------->
<body>
<!--main content under the div which makes a box-->
            <div class="centerBox">
                <br />
                <br />


                <!----------------comic page-------------------->
          
                <a class="pageButton" href="comic.php"><</a> 
                
                PAGE 1

                <a class="pageButton" href="comicpage1.php">></a>

				<!--image-->
                <a href="comicpage2.php"> <img src="/images/comic/P1.png" class="comicImage"></img> </a>

                <br />
                <br />
                <br />
                <br /> 
                <br /> 
            </div>

            <br />
            <br />

            <a class="pageButton" href="comic.php"><</a>

				PAGE 1

            <a class="pageButton" href="comicpage1.php">></a>

            <br />
            <br />
            <br />
            <br />
			<!---end of page--->


            <!--Announcements-->
            <div class="announcements">
                <div class="textBox">
                    <h2>Announcements:</h2>
                    <h3>Chapter 1</h3>
                    <p>
                        What's this? It's the cover! Featuring the great and mighty Woth... And some other characters- but those aren't as important. Welcome to TNW comic, I hope you enjoy reading it.
                       Just click the buttons with arrows at the top of each page, or click the page itself, to move between the pages, simple. 
                    </p>
                    <p>-Fruffers </p>
                    <p><small>25/10/2017</small></p>

                </div>
            </div>
			<!---------------center end--------------- ------>


<?php include('comicFooter.php'); ?>


</body>

</html>