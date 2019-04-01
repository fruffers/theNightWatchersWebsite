 <!DOCTYPE html>
<!--this provides the navigation bar and footer on each page through importing it-->
<!--imports-->
<link href="https://fonts.googleapis.com/css?family=Bangers|Voltaire" rel="stylesheet"> <!--imported fonts-->


<html>
<head>
    <link rel="stylesheet" type="text/css" href="comicStyle.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> //imported jQuery library from Google// </script> 

<style>
select { /*dropdown menu*/
    color: white;
    background-color: black;
}

.dropContent {
	overflow-y: scroll;
	height: 500px;
}
</style>

<!---Start of HTML -->
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
                <p>| a fantasy/adventure/comedy webcomic |</p>
            </div>




            <br />
            <br />
            <br />
            <br />
            <br />

			
            <!--logo-->
			<div class="logodiv">
                <a href="home.php"><img class="logo" alt="Looks like magic destroyed the logo!"/></a>
            </div>
			<!--src="images/icons/tnwlogo.png"-->

            <!--title-->
            <div class="title">
                <h1><a class="titleLink" href="home.php">THE NIGHT WATCHERS</a></h1> <!-- title and homepage hyperlink-->
            </div>

			<!---
            <div class="titleUnderline"> &nbsp </div>
            <div class="topColorBox"> &nbsp</div>
			-->


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
                    <a href="conceptart.php"> concept art </a>
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


			<br />
			<br />

			<div class="dropdowns">
				   <a>Page</a>
				   <select name="form" onchange="location = this.value;"> <!--creates links-->
				   <div class="dropContent">
				       <option value="comic.php">cover</option>
				       <option value="comicpage1.php">1</option>
				       <option value="comicpage2.php">2</option>
				       <option value="comicpage3.php">3</option>
				       <option value="comicpage4.php">4</option>
					</div>			  
				   </select>
				  </div>
                
				<br />
	