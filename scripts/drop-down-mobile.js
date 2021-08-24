document.addEventListener('DOMContentLoaded', event => {

    $("#nav").addClass("js");

    $("#nav").addClass("js").before('<div id="menu">☰</div>');

    $("#menu").click(function(){
        $("#nav").toggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 480) {
            $("#nav").removeAttr("style");
        }
    });

})
