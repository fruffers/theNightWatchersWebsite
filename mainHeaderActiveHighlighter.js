
//tester

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> //imported jQuery library from Google//

$(document).ready(function () {


    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//

    if (pageName == ("home.php")) { //change this depending on the pagename//
        highlight[1].className = ("active"); //change number depending on li position//
    }

});



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> //imported jQuery library from Google// </script> 


 //controls which bit of navigation bar is highlighted//
	$(document).ready(function () {

    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//

 if (pageName == ("index.php") or ("home.php") {
        highlight[1].className = ("active");
		
		
	

	});
	});





/** faulty

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> //imported jQuery library from Google// </script> 

<script> //controls which bit of navigation bar is highlighted//
$(document).ready(function () {


    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//

    if (pageName == ("index.php")) { //change this depending on the pagename//
        highlight[3].className = ("active"); //change number depending on li position//
    }

});
    </script> */







//edited and ready to insert into php

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> //imported jQuery library from Google// </script> 


<script> //controls which bit of navigation bar is highlighted//
	$(document).ready(function () {

    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//

    if (pageName == ("index.php") or ("home.php") { //change this depending on the pagename//
        highlight[1].className = ("active"); //change number depending on li position//
    };

	});
	});
    </script>



/********************************final functioning****************//



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> //imported jQuery library from Google// </script> 


<script> //controls which bit of navigation bar is highlighted//
	$(document).ready(function () {

    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//

//highlights based on the page name//
 if (pageName == ("index.php") or ("home.php")) {
        highlight[1].className = ("active");
		} else if (pageName == ("about")) {
			highlight[2].className = ("active");
		} else if (strpos(pageName, "comic") == true) {
			highlight[3].className = ("active");
		} else if (strpos(pageName, "archive") == true) {
			highlight[4].className = ("active");
		} else if (strpos(pageName, "characters") == true) {
			highlight[5].className = ("active");
		} else if (strpos(pageName, "news") == true) {
			highlight[6].className = ("active");
		} else if (strpos(pageName, "conceptArt") == true) {
			highlight[7].className = ("active");
		} else if (strpos(pageName, "contact") == true) {
			highlight[8].className = ("active");
		} else if (strpos(pageName, "donate") == true) {
			highlight[9].className = ("active");
		} else if (strpos(pageName, "discuss") == true) {
			highlight[10].className = ("active");
		} else if (strpos(pageName, "merch") == true) {
			highlight[11].className = ("active");
		else
		};

	});
	});
    </script>









<script> //controls which bit of navigation bar is highlighted//
    $(document).ready(function () {

    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//

    if (pageName == ("index.php") or ("home.php") { //change this depending on the pagename//
        highlight[1].className = ("active"); //change number depending on li position//
    };

	});
	});
</script>