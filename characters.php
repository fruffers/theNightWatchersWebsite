<!DOCTYPE html>
<html>

<head>
<title>Characters</title>
    <!--imports!-->
    <link rel="stylesheet" type="text/css" href="siteStyle.css">
    <?php include('mainHeader.php'); ?>
    <?php include('highlightFunc.php'); ?>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">//imported jQuery library from Google</script>

    <script>
        //the doc doesn't load until jquery is ready
        $(document).ready(function () {

           //tester $("div").css("border", "3px solid red");

		   //Script for the thumbnails to change on click


            //thumb event function: on clicking each thumb different variables are filled with array elements to show the right character
           $("#t0").on("click", function (event) {
               slider.src = images[0];
               namefill.innerHTML = names[0];
               captionfill.innerHTML = text[0];
               fillref.src = ref[0];
           });

           $("#t1").on("click", function (event) {
               slider.src = images[1];
               namefill.innerHTML = names[1];
               captionfill.innerHTML = text[1];
               fillref.src = ref[1];
           });

           $("#t2").on("click", function (event) {
               slider.src = images[2];
               namefill.innerHTML = names[2];
               captionfill.innerHTML = text[2];
               fillref.src = ref[2];
           });

           $("#t3").on("click", function (event) {
               slider.src = images[3];
               namefill.innerHTML = names[3];
               captionfill.innerHTML = text[3];
               fillref.src = ref[3];
           });

           $("#t4").on("click", function (event) {
               slider.src = images[4];
               namefill.innerHTML = names[4];
               captionfill.innerHTML = text[4];
               fillref.src = ref[4];
           });

           $("#t5").on("click", function (event) {
               slider.src = images[5];
               namefill.innerHTML = names[5];
               captionfill.innerHTML = text[5];
               fillref.src = ref[5];
           });

           $("#t6").on("click", function (event) {
               slider.src = images[6];
               namefill.innerHTML = names[6];
               captionfill.innerHTML = text[6];
               fillref.src = ref[6];
           });

           $("#t7").on("click", function (event) {
               slider.src = images[7];
               namefill.innerHTML = names[7];
               captionfill.innerHTML = text[7];
               fillref.src = ref[7];
           });

           $("#t8").on("click", function (event) {
               slider.src = images[8];
               namefill.innerHTML = names[8];
               captionfill.innerHTML = text[8];
               fillref.src = ref[8];
           });

		   $("#t9").on("click", function (event) {
               slider.src = images[9];
               namefill.innerHTML = names[9];
               captionfill.innerHTML = text[9];
               fillref.src = ref[9];
           });

		   $("#t10").on("click", function (event) {
               slider.src = images[10];
               namefill.innerHTML = names[10];
               captionfill.innerHTML = text[10];
               fillref.src = ref[10];
           });

		   $("#t11").on("click", function (event) {
               slider.src = images[11];
               namefill.innerHTML = names[11];
               captionfill.innerHTML = text[11];
               fillref.src = ref[11];
           });


        });
    </script>


</head>

<style>

        #name {
            width: 26%;
            border-radius: 8px;
            color: #1a1a23;
            cursor: default;
            font-family: 'verdana','arial', 'Helvetica', 'sans-serif';
        }

        .thumbnail {
            display: inline-block;
            opacity: 0.6;
            border: solid;
            border-width: 2px;
            border-color: pink;
            border-radius: 5px;
        }

        .thumbnail:hover {
            opacity: 1;
            border-color: cyan;
        }

        .slidebtn {
            width: 5%;
            background-color: #1a1a23;
            color: antiquewhite;
            border-radius: 5px;
            height: 4%;
            outline-color: darkcyan;
        }

        #nextbtn {
            left: 10%;
        }

        #backbtn {
            right: 10%;
        }

        .slidebtn:hover {
            color: cyan;
        }


        #slider {
            height: 700px;
            width: auto; /*change when images are resized so they are all the same size*/
        }

        .charintro {
            width: 40%;
        }

        #slider {
            border: solid;
            border-width: 2px;
            border-color: #a7a88f;
            border-radius: 2px;
        }

        #casttitle {
            text-decoration: underline;
        }

        .copyright {
            width: 50%;
        }

        #caption {
            width: 80%;
        }

        #fullbodyRef {
            width: 70%;
        }
	</style>



<body>
    <div class="charintro">
                <p>
                    Meet TNW's colourful cast of heroes and villains. Woth can't navigate this adventure alone, no matter how hard he tries.
                    He'll come into conflict with all kinds of characters. Making friends, and enemies... along the perilous road. Through them he'll learn more about himself, and what
                    it means to be a hero. Whilst trying to keep the Chalice away from their insistent hands.
                </p>
            </div>


            <!--main content under the div which makes a box-->
            <div class="centerBox">

                <br />

                <h1 id="casttitle">THE CAST</h1>

                <br />


                <!--thumbnails-->
                <img class="thumbnail" id="t0" src="" height="150" width="150" onclick="t0()" /> &nbsp;
                <img class="thumbnail" id="t1" src="" height="150" width="150" onclick="t1()" /> &nbsp;
                <img class="thumbnail" id="t2" src="" height="150" width="150" onclick="t2()" /> &nbsp;
                <img class="thumbnail" id="t3" src="" height="150" width="150" onclick="t3()" /> &nbsp;
                <img class="thumbnail" id="t4" src="" height="150" width="150" onclick="t4()" /> &nbsp;
                <img class="thumbnail" id="t5" src="" height="150" width="150" onclick="t5()" /> &nbsp;
                <img class="thumbnail" id="t6" src="" height="150" width="150" onclick="t6()" /> &nbsp;
				<img class="thumbnail" id="t7" src="" height="150" width="150" onclick="t7()" /> &nbsp;
				<img class="thumbnail" id="t8" src="" height="150" width="150" onclick="t8()" /> &nbsp;
				<img class="thumbnail" id="t9" src="" height="150" width="150" onclick="t9()" /> &nbsp;
				<img class="thumbnail" id="t10" src="" height="150" width="150" onclick="t10()" /> &nbsp;
				<img class="thumbnail" id="t11" src="" height="150" width="150" onclick="t11()" /> &nbsp;


                
				<!--name-->
                <h2 id="name">Woth Wynton</h2>

				<!--image slider-->
                <div class="slidecontain">
                    <img id="slider" src="" href="" />
                </div>


				<!--arrow buttons-->
				<!--that change script part on click by running functions-->
				<!--src is filled with the image from js array 'images'-->
                <button class="slidebtn" id="nextbtn" onclick="prev()" alt="<"> &#x2B9C; </button> <!--previous-->
                <button class="slidebtn" id="backbtn" onclick="next()" alt=">"> &#x2B9E; </button> <!--next-->

				<!--caption-->
				<!--filled with text array which is put into captionfill variable-->
                <p id="caption">............</p>
                

                <br />

				<!--reference images-->
                <img id="fullbodyRef" src=""/>

				<br />
				<br />
				<br />
				<br />

    </div> <!--end of centerbox-->
    <?php include('mainFooter.php'); ?>


	<script>

        /////////////*start of major JS *////////////

        /*array of images in slider. aka the images under the names. CHANGE THESE TO JPG*/
        var images = [
            "/images/elements/woth_1.png",
            "/images/elements/maude_1.jpg",
            "/images/elements/purton_1.png",
            "",
            "",
            "/images/elements/odiar_1.jpg",
            "/images/elements/ganaci_1.jpg",
            "/images/elements/methyl_1.png",
			"/images/elements/bernal_1.jpg",
			"/images/elements/ariasel_1.jpg",

        ];
        /*8 images*/


        var names = [
            "Woth Wynton (Woh-th)",
            "Maude Ethne (Maud-eh)",
            "Purton Hellebore (Pur-ton)",
            "Thornheart",
            "Hen",
            "King Odiar Hellebore (Oh-dear)",
            "Ganaci Hellebore (Gan-ass-ee)",
            "Methyl (Meeth-al)",
            "Bernal Hellebore",
            "Ariasel (Ari-ah-zel)",
			"Laertes (Lay-ert-ees)",
			"Mancer",
        ];

        //TODO fill and apply
        var nicknames = [
            "Dragon-Slayer",
            "Devil",
            ""
       ];

	   //thumbnails
        var thumbimages = [
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
        ];



        var text = [
            `<p>
                Woth Wynton is the hero of the story. He is a headstrong and excessively proud man, who constantly boasts about himself until his listeners’ ears bleed. 
            Woth’s greatest desire in life is fame. Something he thinks he can gain by becoming powerful. He is a mercenary, a warrior, known as the ‘Dragon-Slayer’, 
            paid to kill whatever his contractor (often a wealthy noble) desires him to. He is an unnaturally large man, with an even more unnatural strength that he must learn to control.
            His biological origins are unknown to him, but he is content to believe he is a gift sent from the Upper-Realm, something truly special. Due to this he flaunts an air of superiority 
            and is frustrated when he is not carrying out his self-proclaimed purpose of destroying all magic. 
            </p>
            <p>
            What he enjoys most is: violence, winning, fighting, danger, action, exploring, and eating. What he hates most is: magic, prose, music, written words, staying still, and anything similar that he 
            considers weak or boring. Splitting skulls and hunting monsters are his favourite past times, anything that mortally endangers him he finds exciting. 
            </p>
            <p>
            Despite his bloodthirst he is determined to become a ‘hero’ like his fictional idol, the do-gooding knight, Thornheart, and that means being a good person with principles and morals (and as he cannot 
            figure; one with an open heart). Thus, Woth will endanger only what he considers cruel or evil, or what he convinces himself is such. However, Woth doesn’t quite understand the full emotional depth
            of a hero’s role, he glamorises it to be physical and destructive. Undertaking only the largest threats to bolster his importance. And often impairing himself by trying to become the impossible; 
            sacrificing himself, rejecting help, or carrying full responsibility on his shoulders alone.
            </p>
            <p>
            Nevertheless, Woth makes sure to not forget a base gentility. Manners, an amicable attitude, and kind judgement, like his adoptive mothers taught him. Sometimes he blunders, and he may kill an 
            innocent man, but he will deceive himself that it was for a good purpose. Yet that guilt sticks and troubles his mind. Which for all his tough exterior, Woth’s inside is rather more fragile.
            </p>
               `,

            `maude is great`,
            `purton lalalallalala`,
        ];


		//reference images. Those under the text.
        var ref = [
            "/images/elements/wothref_1.png",
            "",
            "",
            "",
            "",
            "",

        ];


		//Assigning the script variables to the correct HTML elements to change those elements into what is needed

        var num = 0; /*current slide/slide tracker*/

        var slider =
            document.getElementById("slider");

        //put text inside
        var captionfill =
            document.getElementById("caption");

        var namefill =
            document.getElementById("name");

        slider.src = images[0];

        var thumbs = document.getElementsByClassName("thumbnail");

        var fillref = document.getElementById("fullbodyRef");

        //default caption fill
		//The text array is being put inside the captionfill variable by its index. Which the variable is then put inside the element with
		//class caption
        captionfill.innerHTML = text[0];

        //thumbnail fill using class elements by their index
        thumbs[0].src = thumbimages[0];
        thumbs[1].src = thumbimages[1];
        thumbs[2].src = thumbimages[2];
        thumbs[3].src = thumbimages[3];
        thumbs[4].src = thumbimages[4];
        thumbs[5].src = thumbimages[5];
        thumbs[6].src = thumbimages[6];
        thumbs[7].src = thumbimages[7];

        



        function next() {

            num++; //increments count
            if (num >= images.length) { //resets slider to 0 if user reaches max image
                num = 0;
            }
            slider.src = images[num];  //images' index is read off the number that num has been incremented to
            namefill.innerHTML = names[num];
            captionfill.innerHTML = text[num];
            fillref.src = ref[num];
        };

        function prev() {

            num--; //minus num on each click/function run
            if (num < 0) { //if current slide is less than 0 then jump to the last slide
                num = images.length - 1;
            }
            slider.src = images[num];
            namefill.innerHTML = names[num];
            captionfill.innerHTML = text[num];
            fillref.src = ref[num];
        };

</script>





</body>
</html>
