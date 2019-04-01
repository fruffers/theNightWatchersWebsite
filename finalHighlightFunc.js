


$(document).ready(function () {

    //$("li").eq(0).addClass("active");

    //highlights based on the page name//
    var sPath = window.location.pathname;
    var pageName = sPath.substring(sPath.lastIndexOf('/') + 1);

    //compares pagename to the strings if it contains string then it adds an active class to the nav bar to highlight it
    if (pageName.indexOf("home" || "index" || "tester") >= 0) {
        $("li").eq(0).addClass("active");
    } else if (pageName.indexOf("about") >= 0) {
        $("li").eq(1).addClass("active");
    } else if (pageName.indexOf("comic") >= 0) {
        $("li").eq(2).addClass("active");
    } else if (pageName.indexOf("archive") >= 0) {
        $("li").eq(3).addClass("active");
    } else if (pageName.indexOf("characters") >= 0) {
        $("li").eq(4).addClass("active");
    } else if (pageName.indexOf("news") >= 0) {
        $("li").eq(5).addClass("active");
    } else if (pageName.indexOf("concept") >= 0) {
        $("li").eq(6).addClass("active");
    } else if (pageName.indexOf("contact") >= 0) {
        $("li").eq(7).addClass("active");
    } else if (pageName.indexOf("donate") >= 0) {
        $("li").eq(8).addClass("active");
    } else if (pageName.indexOf("discuss") >= 0) {
        $("li").eq(9).addClass("active");
    } else if (pageName.indexOf("merch") >= 0) {
        $("li").eq(10).addClass("active");
    } else {
        $("li").addClass("active");
    };

});



