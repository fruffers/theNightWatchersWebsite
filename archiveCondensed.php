<!DOCTYPE html>
<html>

<head>
<header> Archive Condensed </header>

<style>

/*for archiveCondensed*/        
.archTitle { 
    color: #63717f;
    font-size: large;
}

.archLinks {
    display: inline-block;
}

/*making title hyperlink and not change color*/
.titleLink {
    color: inherit;
    text-decoration: none;
}

.titleLink:hover {
        color: inherit;
        text-decoration: none;
    }

/*works. changes link color on hover*/
.links:hover {
    color: red;
}

.links:visited:hover {
    color: red;
}

.links:visited {
    color: cornflowerblue;
}

  a {
            color: pink;
            text-decoration: none;
        }

</style>

    <!--imports!-->
    <link rel="stylesheet" type="text/css" href="siteStyle.css">
    <?php include('mainHeader.php'); ?>
    <?php include('highlightFunc.php'); ?>
</head>




<body>
    <!--main content under the div which makes a box-->
     <!--main content under the div which makes a box-->
                <br />
                <br />
                <br />
                <br />


                <div class="archTitle"><h2> Condensed Archive </h2></div>

                <div class="chapters"><h4>Chapter 1</h4></div>

                <div class="archLinks">
                    <!--classes needed inside for hover function to work, it won't work on a div-->
                    <a class="links" href="Comic.html"><p>cover 1 variant 1</p></a>
                    <a class="links" href="comicpage1.html"><p>page 1</p></a>
                    <a class="links" href="comicpage2.html"><p>page 2</p></a>
                    <a class="links" href="comicpage3.html"><p>page 3</p></a>
                    <a class="links" href="comicpage4.html"><p>page 4</p></a>
                    <a class="links" href="comicpage5.html"><p>page 5</p></a>
                    <a class="links" href="comicpage6.html"><p>page 6</p></a>
                    <a class="links" href="comicpage7.html"><p>page 7</p></a>
                    <a class="links" href="comicpage8.html"><p>page 8</p></a>
                    <a class="links" href="comicpage9.html"><p>page 9</p></a>
                    <a class="links" href="comicpage10.html"><p>page 10</p></a>
                </div>

                <!--alt and highlight parts to multiple select. To make a space press shift and space then add what you need.-->



                <br />
                <br />
                <br />
         



        </div>
        <br />
        <br />

    </div> <!--end of centerbox-->



    <?php include('mainFooter.php'); ?>
</body>
</html>






