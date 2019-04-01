<!DOCTYPE html>
<html>

<head>
    <!--imports!-->
    <link rel="stylesheet" type="text/css" href="siteStyle.css">
    <?php include('mainHeader.php'); ?>
    <?php include('highlightFunc.php'); ?>

	<!-- Load font awesome social media icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
		.contactLink a {
            color: purple; 
        }

		.icons a {
			color: white;
			background-color: black;
			padding: 16px;
			font-size: 20px;
			display: block;
			text-align: center;
			line-height: 20px;
			text-decoration: none;
			width: 40%;
		}

		.contactLink a:hover {
			background-color: #45d3fa;
			color: black;
		}

		p:not(.tagline) {
			width: 70%;
		}

		.icon {
			width: 40%;
		}

	</style>
</head>




<body>
    <!--main content under the div which makes a box-->
    <div class="centerBox">
        <br />
        <br />
        <br />

        <div class="textBox">

            <!--TEXT GOES HERE-->
           <h2>Contact</h2>
				<img src="/images/icons/natsuki.png" class="icon"/>
                    <p>Hello, 
					I am the author of the comic, Fruffers. Also known as Louise. If you'd like to contact me or just browse through the things I create
					then click a social below:  </p>
					<div class="icons">
                    <p class="contactLink"><a href="https://fruffers.deviantart.com/">Deviantart <i class="fa fa-deviantart"></i></a></p>
                    <p class="contactLink"><a href="https://fruffers-art.tumblr.com/">Art Tumblr <i class="fa fa-tumblr"></i></a></p>
                    <p class="contactLink"><a href="https://picarto.tv/Fruffers">Picarto <i class="fa fa-picarto"></i></a></p>
					<p class="contactLink"><a href="https://twitter.com/Fruffers">Twitter <i class="fa fa-twitter"></i></a></p>
					<p class="contactLink"><a href="">Youtube <i class="fa fa-youtube"></i></a></p>
					<p class="contactLink"><a href="https://www.instagram.com/fruffers/">Instagram <i class="fa fa-instagram"></i></a></p>
					<p class="contactLink"><a href="https://www.redbubble.com/people/fruffers">Redbubble <i class="fa fa-redbubble"></i></a></p>
					</div>
           


        </div> <!--end of text box-->
        <br />
        <br />

    </div> <!--end of centerbox-->



    <?php include('mainFooter.php'); ?>
</body>
</html>
