$(document).ready(function () {
    if(window.innerWidth > 600) {
    $(".navigation a").click(function(){
        $(".active").removeClass("active");
        $(this).addClass("active");
    });
    if($("#sub").text() == "Online"){
        $("#sub").css("color","green");
    };}
    else{
        $("ul").hide();
        if($("#sub").text() == "Offline"){
            $("#header").css("color","red");
        };
    };
$("button.hamburger").click(function () {
    $("ul").slideToggle("slow");
    $("#line1").toggleClass("line1");
    $("#line2").toggleClass("line2");
    $("#line3").toggleClass("line3");
});
});
