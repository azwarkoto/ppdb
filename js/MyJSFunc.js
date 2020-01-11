$(document).ready(function () {
    /* BootStrap Slider */
    $('.carousel').carousel({
        interval: 3000
    })
})


$(document).ready(function () {

    /* Color Box Change*/
    $(".fa-cog").on("click", function () {
        $(".colors").fadeToggle();
    })

    $(".color-list li").on("click", function () {
        $(".color-theme").css("color", $(this).attr("data-value"));
        $(".background-color-theme").css("backgroundColor", $(this).attr("data-value"));
        $(".border-color-theme").css("border", "3px solid " + $(this).attr("data-value"));
        $("link[href*='theme']").attr("href", $(this).attr("data-badawy"));
    })


    /* Loading Page*/
    /*hide the loading  div then hide the parent (loading-page)*/
    $(".sk-cube-grid").fadeOut(2000, function () {
        $("body").css("overflow", "auto");
        $(".loading-page").fadeOut(2000).remove();
    })


    /* Scroll to top   */
    $(window).on("scroll", function () {
        if ($("body").scrollTop() >= 1400) {
            $(".scroll-top-arrow").fadeIn();
        }
        else {
            $(".scroll-top-arrow").fadeOut();
        }
    })

    $(".scroll-top-arrow").on("click", function () {
        $("body,html").animate({
            scrollTop: 0
        }, 2000)
    })

  //######################## nice Scroll ##################################


    $(document).ready(function () {
        $("html , body").niceScroll();
    })

})

