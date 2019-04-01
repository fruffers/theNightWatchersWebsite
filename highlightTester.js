<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> //imported jQuery library from Google// </script> 


//controls which bit of navigation bar is highlighted//
$(document).ready(function () {

    var liStorer = [highlight]; //need to store li in an array

    var highlight = document.getElementsByTagName("li");
    var pageName = location.href.split("/").slice(-1); //get current page name//


    var tagArray = [];

    (function () {
        var elements = document.getElementsByTagName("h3");
        for (var i = 0; i < elements.length; i++) {
            tagArray.push(elements[i].innerText);
        }
    })();

    var nameArray = [];



    if (pageName == ("index.php")) or (("home.php")); {
        (highlight[1].className = ("active"));
    } else if (pageName == ("about")) {
        (highlight[2].className = ("active"));
    } else if (pageName.includes("home")) {
        highlight[3].className = ("active");

    };


        /*
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
	
    };

	});

