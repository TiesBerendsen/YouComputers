$(document).ready( () => {

    $(".gegevensknop").on("click", () => {
        $(".gegevens").css("display", "block")
        $(".informatie").css("display", "none")
        $(".bestellingen").css("display", "none")
        $(".beveiliging").css("display", "none")
    })

    $(".informatieknop").on("click", () => {
        $(".gegevens").css("display", "none")
        $(".informatie").css("display", "block")
        $(".bestellingen").css("display", "none")
        $(".beveiliging").css("display", "none")
    })

    $(".bestellingenknop").on("click", () => {
        $(".gegevens").css("display", "none")
        $(".informatie").css("display", "none")
        $(".bestellingen").css("display", "block")
        $(".beveiliging").css("display", "none")
    })

    $(".beveiligingknop").on("click", () => {
        $(".gegevens").css("display", "none")
        $(".informatie").css("display", "none")
        $(".bestellingen").css("display", "none")
        $(".beveiliging").css("display", "block")
    })

    

})