<!DOCTYPE html>
<html>

<head>
    <!--imports!-->
    <!-- <link rel="stylesheet" type="text/css" href="archiveStyle.css"> -->
    <?php include('mainHeader.php'); ?>
    <?php include('highlightFunc.php'); ?>
</head>

<style>
/*CSS style sheet*/

html, body {
    margin: 0;
    padding: 0;
}
/*gets rid of browser default borders*/

body {
    text-align: center;
    align-content: center;
}

/*background color*/
.backgroundGrad {
    background-color: #1f1c26;
}

hr { /*divider*/
    border-color: #9e939b;
}

/*general text color*/
.wholeFont {
    font-family: arial, helvetica, sans-serif;
}

/*search box at top*/
.searchBox {
    float: right;
    padding: 8px 14px; /*top/bottom padding and left/right padding*/
}

/*search box at bottom*/
.searchBoxBottom {
    position: relative;
    float: right;
    top: 70px;
    padding: 8px 14px; /*top/bottom padding and left/right padding*/
}

input#search {
    width: 130px;
    height: 22px;
    background: #2b303b;
    border: hidden;
    text-align: start;
    color: #63717f;
    border-radius: 3px; /*rounds the corners*/
}

.searchBox.placeholder {
    font-family: Arial;
}

/*the archive pictures*/
div.img {
    margin: 10px;
    border: 3px solid #ffffff;
    display: inline-block;
    width: 120px;
    background: #ffffff;
    opacity: 0.5;
    height: 200px;
    /*200px*/
}

    /**   .resize {
            padding: 17px;
        }*/

    div.img:hover {
        border: 3px solid purple;
        opacity: 1;
        cursor: pointer;
    }

    div.img img {
        width: 120px;
        height: 200px;
        /*img inside the box*/
    }

div.desc {
    text-align: center;
}

/*the navigation bar*/
.navigation, ul {
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #343042;
    width: 90%;
    border-radius: 15px;
}

li {
    display: inline-block; /*puts bar in the center*/
    font-variant: small-caps;
    font-weight: 400;
}

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

        li
        a:hover:not(.active) {
            background-color: #45d3fa;
        }

.active {
    background-color: #bb4bcc;
    /*purple color store: #bb4bcc*/
}

a:hover.active {
    background-color: #45d3fa; /*puts hover color over the active one too*/
}

/*header tags aka the bar at the top*/
.headerBar {
    background-color: #2f3949;
    color: #45d3fa;
    text-align: center;
    width: 100%;
    height: 10%;
    font-variant: small-caps;
    font-size: smaller;
    font-weight: 300;
    float: left;
    cursor: default;
    margin: 0;
    padding: 0;
}

/*title*/
.title {
    /**font-variant: small-caps;*/
    font-family: 'Voltaire', 'Charlemagne Std', Garamond, Arial, 'Times New Roman';
    color: #45d3fa;
    font-size: 2.8vw;
    font-weight: lighter;
    text-shadow: -5px 0px 0px #bb4bcc;
    /** text-shadow: 
                 5px    -5px   0px white, 
                -5px  -5px  0px white, 
                -5px   5px  0px white, 
                 5px    5px   0px white; /*shadow around the text*/
    /**0 0  80px #28d1ff, 
                0 0  80px #28d1ff, 
                0 0  80px #28d1ff, 
                0 0  80px #28d1ff; */
    text-transform: capitalize;
    background-image: url(''); /*Unused broken background image. Needs resizing*/
    background-position: center;
    border: hidden;
    letter-spacing: 1px;
    line-height: 1;
    z-index: 10; /*positions this above divs*/
}

h1 {
    bottom: 20px;
    left: 100px;
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



/*subheader boxes AKA chapter one*/
.subheaderBox {
    background-color: inherit;
    color: inherit;
    width: 100%;
    height: auto;
    margin: 1px;
    padding: 1px;
    font-size: small;
    font-variant-caps: small-caps;
    cursor: default;
}


/*hyperlink color*/
a {
    color: pink;
    text-decoration: none; /*removes link underline*/
}

/*Box as background*/
.centerBox {
    background-color: #5e5f6b;
    display: block;
    height: auto;
    width: 90%;
    border-radius: 2px;
    padding: 10px;
}

/*footer*/
.footer {
    width: auto;
    height: auto;
    background: #0c0d16;
}

    /*overridding the navigation bar to make footer box design*/
    .footer ul {
        border-radius: 1px;
        background-color: transparent;
        width: 100%;
    }

    .footer li {
    }


/*logo*/
.logo {
    position: static;
    z-index: -1;
    left: 0px;
    top: 0px;
}

.footerButton {
    background-color: #2f3949;
}

/*donate button*/
.redDonate {
    background-color: indianred;
}

.backToTopBtn {
    width: 50%;
    font-variant-caps: small-caps;
    background-color: #2f3949;
    border-radius: 3px;
    position: relative; /*can't expand width wise*/
    top: -8px; /*moves button down*/
    color: inherit;
    text-decoration: none;
    padding: 2px;
}



.redDonate:hover {
    background-color: purple; /*doesn't work*/
}

/*giving an arrow cursor when hovering over text*/
.tips {
    cursor: default;
}

/*numbers*/
.desc {
    color: white;
}

.archiveNotice:hover {
    color: purple;
}

.archiveNotice {
    font-size: x-small;
    color: #b27c7c;
}

.copyright {
    width: 50%;
}
</style>




<body>
<body class="backgroundGrad">
	<font color="#9e939b" class="wholeFont">
		<center>
			<div class="subheaderBox">
                        <h3> chapter one </h3>
                    </div>

                    <a class="archiveNotice" href="archiveCondensed.php"><p>click here for Condensed Archive</p></a>

                    <!--The Archive Gallery-->

                    <div class="centerBox">
                        <!--page 1-->
                        <div class="img">
                            <a target="_blank" href="comicpage1.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 1" 
                                     width="300" height="200"/>
                                    
                            </a>
                            <div class="desc">
                                1
                                </div>
                            </div>

                        <!--page 2-->
                        <div class="img">
                            <a target="_blank" href="comicpage2.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 2"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                2
                            </div>
                        </div>

                        <!--page 3-->
                        <div class="img">
                            <a target="_blank" href="comicpage3.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 3"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                3
                            </div>
                        </div>

                        <!--page 4-->
                        <div class="img">
                            <a target="_blank" href="comicpage4.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 4"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                4
                            </div>
                        </div>

                        <!--page 5-->
                        <div class="img">
                            <a target="_blank" href="comicpage5.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 5"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                5
                            </div>
                        </div>

                        <!--page 6-->
                        <div class="img">
                            <a target="_blank" href="comicpage6.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 6"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                6
                            </div>
                        </div>

                        <!--page 7-->
                        <div class="img">
                            <a target="_blank" href="comicpage7.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 7"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                7
                            </div>
                        </div>

                        <!--page 8-->
                        <div class="img">
                            <a target="_blank" href="comicpage8.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 8"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                8
                            </div>
                        </div>

                        <!--page 9-->
                        <div class="img">
                            <a target="_blank" href="comicpage9.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 9"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                9
                            </div>
                        </div>

                        <!--page 10-->
                        <div class="img">
                            <a target="_blank" href="comicpage10.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 10"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                10
                            </div>
                        </div>

                        <!--page 11-->
                        <div class="img">
                            <a target="_blank" href="comicpage11.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 11"
                                     width="300" height="200" class="resize" />
                            </a>
                            <div class="desc">
                                11
                            </div>
                        </div>

                        <!--page 12-->
                        <div class="img">
                            <a target="_blank" href="comicpage12.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 12"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                12
                            </div>
                        </div>

                        <!--page 13-->
                        <div class="img">
                            <a target="_blank" href="comicpage13.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 13"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                13
                            </div>
                        </div>

                        <!--page 14-->
                        <div class="img">
                            <a target="_blank" href="comicpage14.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 14"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                14
                            </div>
                        </div>

                        <!--page 15-->
                        <div class="img">
                            <a target="_blank" href="comicpage15.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 15"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                15
                            </div>
                        </div>

                        <!--page 16-->
                        <div class="img">
                            <a target="_blank" href="comicpage16.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 16"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                16
                            </div>
                        </div>

                        <!--page 17-->
                        <div class="img">
                            <a target="_blank" href="comicpage17.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 17"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                17
                            </div>
                        </div>

                        <!--page 18-->
                        <div class="img">
                            <a target="_blank" href="comicpage18.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 18"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                18
                            </div>
                        </div>

                        <!--page 19-->
                        <div class="img">
                            <a target="_blank" href="comicpage19.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 19"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                19
                            </div>
                        </div>

                        <!--page 20-->
                        <div class="img">
                            <a target="_blank" href="comicpage20.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 20"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                20
                            </div>
                        </div>

                        <!--page 21-->
                        <div class="img">
                            <a target="_blank" href="comicpage21.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 21"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                21
                            </div>
                        </div>

                        <!--page 22-->
                        <div class="img">
                            <a target="_blank" href="comicpage22.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 22"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                22
                            </div>
                        </div>

                        <!--page 23-->
                        <div class="img">
                            <a target="_blank" href="comicpage23.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 23"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                23
                            </div>
                        </div>

                        <!--page 24-->
                        <div class="img">
                            <a target="_blank" href="comicpage24.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 24"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                24
                            </div>
                        </div>

                        <!--page 25-->
                        <div class="img">
                            <a target="_blank" href="comicpage25.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 25"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                25
                            </div>
                        </div>

                        <!--page 26-->
                        <div class="img">
                            <a target="_blank" href="comicpage26.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 26"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                26
                            </div>
                        </div>

                        <!--page 27-->
                        <div class="img">
                            <a target="_blank" href="comicpage27.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 27"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                27
                            </div>
                        </div>

                        <!--page 28-->
                        <div class="img">
                            <a target="_blank" href="comicpage28.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 28"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                28
                            </div>
                        </div>

                        <!--page 29-->
                        <div class="img">
                            <a target="_blank" href="comicpage29.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 29"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                29
                            </div>
                        </div>

                        <!--page 30-->
                        <div class="img">
                            <a target="_blank" href="comicpage30.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 30"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                30
                            </div>
                        </div>

                        <!--page 31-->
                        <div class="img">
                            <a target="_blank" href="comicpage31html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 31"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                31
                            </div>
                        </div>

                        <!--page 32-->
                        <div class="img">
                            <a target="_blank" href="comicpage32.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 32"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                32
                            </div>
                        </div>

                        <!--page 33-->
                        <div class="img">
                            <a target="_blank" href="comicpage33.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 33"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                33
                            </div>
                        </div>

                        <!--page 34-->
                        <div class="img">
                            <a target="_blank" href="comicpage34.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 34"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                34
                            </div>
                        </div>

                        <!--page 35-->
                        <div class="img">
                            <a target="_blank" href="comicpage35.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 35"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                35
                            </div>
                        </div>

                        <!--page 36-->
                        <div class="img">
                            <a target="_blank" href="comicpage36.html">
                                <img src="/images/archive/wip_archive.jpg" alt="Page 36"
                                     width="300" height="200" />
                            </a>
                            <div class="desc">
                                36
                            </div>
                        </div>

                    <!--page 37-->
                    <div class="img">
                        <a target="_blank" href="comicpage38.html">
                            <img src="/images/archive/wip_archive.jpg" alt="Page 37"
                                 width="300" height="200" />
                        </a>
                        <div class="desc">
                            37
                        </div>
                    </div>
                        <!--make sure its 2 divs not 3, if its 3 then there will be an unsightly gap-->

                    <!--page 38-->
                    <div class="img">
                        <a target="_blank" href="comicpage38.html">
                            <img src="/images/archive/wip_archive.jpg" alt="Page 38"
                                 width="300" height="200" />
                        </a>
                        <div class="desc">
                            38
                        </div>
                    </div>

                    <!--page 39-->
                    <div class="img">
                        <a target="_blank" href="comicpage39.html">
                            <img src="/images/archive/wip_archive.jpg" alt="Page 39"
                                 width="300" height="200" />
                        </a>
                        <div class="desc">
                            39
                        </div>
                    </div>

                    <!--page 40-->
                    <div class="img">
                        <a target="_blank" href="comicpage40.html">
                            <img src="/images/archive/wip_archive.jpg" alt="Page 40"
                                 width="300" height="200" />
                        </a>
                        <div class="desc">
                            40
                        </div>
                    </div>
                        </div>




    </div> <!--end of centerbox-->
    <?php include('mainFooter.php'); ?>
</body>
</html>



