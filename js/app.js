$(document).ready(function () {
    $(".navigation a").click(function(){
        $(".active").removeClass("active");
        $(this).addClass("active");
    });
    if($("#sub").text() == "Online"){
        $("#sub").css("color","green");
    };
});
