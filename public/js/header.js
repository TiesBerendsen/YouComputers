$(document).ready( () => {
    var hamburgerout = false
    var accountout = false

    $(".hamburger").on("click", () => {

        $(window).resize( () => {
            if($(window).width() >= 1306) {
            hamburgerout = false
            $(".hamburgerout").css("display", "none")
            $(".hamburger").css("transform", "rotate(0deg)")
            }
        })


        if(hamburgerout === false) {
            hamburgerout = true
           $(".hamburgerout").css("display", "flex")
           $(".hamburger").css("transform", "rotate(90deg)")
        } else if(hamburgerout === true) {
            hamburgerout = false
            $(".hamburgerout").css("display", "none")
            $(".hamburger").css("transform", "rotate(0deg)")
        }
    })

    $(".accountButton").on("click", () => {
        if(accountout === false) {
            accountout = true
            $(".accountout").css("display", "block")
        } else if(accountout === true) {
            accountout = false
            $(".accountout").css("display", "none")
        }
    })
})

