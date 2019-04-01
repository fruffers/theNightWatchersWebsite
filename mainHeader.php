<!DOCTYPE html>
<!--this provides the navigation bar on each page through importing it-->

<!--imports-->
<link href="https://fonts.googleapis.com/css?family=Bangers|Voltaire" rel="stylesheet"> <!--imported fonts-->


<html>
<head>
    <!--<link rel="stylesheet" type="text/css" href="siteStyle.css"> <!--imported CSS sheet-->
	<script src=""></script> <!--imported js page that manages which title on the navigation bar is 'active'/highlighted-->

	<meta charset="utf-8" />
    <title></title>
</head>


<!----------------Start of HTML--- ---------------------->
<body class="backgroundGrad">


    <font color="#9e939b" class="wholeFont">
        <!--color of the text on background-->
        <center>

            <!--search box-->

            <div class="searchBox">
                <div class="container-1">

                    <form action="sphider/search.php" method="get">
                        <input type="search" name="query" id="search" placeholder="Find Dragons..." value="" action="include/js_suggest/suggest.php" columns="2">

                        <input type="hidden" name="search" value="1">
                        <input type="hidden" name="si" value="78213476">

                    </form>

                </div>
            </div>


            <!--header bar-->
            <div class="headerBar">
                <p class="tagline">| a fantasy/adventure/comedy webcomic |</p>
            </div>




            <br />
            <br />
            <br />
            <br />
            <br />

			<!--logo-->
                <a href="home.php"> <img class="logo"  style="width:auto;height:160px;" alt="Looks like magic destroyed the logo!"></a>
            <!--src="images/icons/tnwlogo.png"-->

            <!--title-->
            <div class="title">

                <h1><a class="titleLink" href="home.php">THE NIGHT WATCHERS</a></h1> <!-- title and homepage hyperlink-->
            </div>

            

            <br />

            <br />

            <!--navigation bar-->

            <ul class="navigation">
                <li>
                    <a href="home.php"> home </a>
                </li>
                <li>
                    <a href="about.php"> about </a>
                </li>
                <li>
                    <a href="comic.php"> comic </a>
                </li>
                <li>
                    <a href="archive.php"> archive </a>
                </li>
                <li>
                    <a href="characters.php"> characters </a>
                </li>
                <li>
                    <a href="news.php"> news </a>
                </li>
                <li>
                    <a href="conceptArt.php"> concept art </a>
                </li>
                <li>
                    <a href="contact.php"> contact </a>
                </li>
                <li>
                    <a href="donate.php"> donate </a>
                </li>
                <li>
                    <a href="discuss.php"> discuss </a>
                </li>
                <li>
                    <a href="merch.php"> merch </a>
                </li>

            </ul>

            <!--Banner-->
            <img src="banner.png" />

	