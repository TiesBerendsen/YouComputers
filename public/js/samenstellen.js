$(document).ready( () => {
    var processor = "";
    var moederbord = "";
    var ram="";
    var gpu="";
    var opslag="";
    var behuizing="";
    var voeding="";

$(".beginsamenstellenknop").on("click", () => {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".samenstellencontainer").offset().top
    }, 1000);
})

$(".samenstellenClass .links").on("click", () => {
    $(".samenstellenClass .links").css("clip-path", "none")
    $(".samenstellenClass .links").css("width", "100%")
    $(".samenstellenClass .links img").css("width", "40%")
    $(".samenstellenClass .rechts").css("display", "none")
    $(".samenstellenDiv").css("display", "flex")
    $(".samenstellenClassInfo").css("display", "flex")
    $(".verdernav").css("display", "flex")
    $("#amdProcessors").css("display", "none")
    $("#amdMoederborden").css("display", "none")
    
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#intelProcessors").offset().top
    }, 1500);
})

$(".samenstellenClass .rechts").on("click", () => {
    $(".samenstellenClass .rechts").css("clip-path", "none")
    $(".samenstellenClass .rechts").css("width", "100%")
    $(".samenstellenClass .rechts").css("margin-left", "0")
    $(".samenstellenClass .rechts img").css("width", "40%")
    $(".samenstellenClass .links").css("display", "none")
    $(".samenstellenDiv").css("display", "flex")
    $(".samenstellenClassInfo").css("display", "flex")
    $(".verdernav").css("display", "flex")
    $("#intelProcessors").css("display", "none")
    $("#intelMoederborden").css("display", "none")
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#amdProcessors").offset().top
    }, 1500);
})

// processor samenstellen
$("#processor1").on("click", () => {
    $("#processor1").addClass("selected")
    $("#processor2").removeClass("selected")
    $("#processor3").removeClass("selected")
    $("#processor4").removeClass("selected")
    processor = $("#processor1 #processorNaam").text()
}) 
$("#processor2").on("click", () => {
    $("#processor1").removeClass("selected")
    $("#processor2").addClass("selected")
    $("#processor3").removeClass("selected")
    $("#processor4").removeClass("selected")
    processor = $("#processor2 #processorNaam").text()
}) 
$("#processor3").on("click", () => {
    $("#processor1").removeClass("selected")
    $("#processor2").removeClass("selected")
    $("#processor3").addClass("selected")
    $("#processor4").removeClass("selected")
    processor = $("#processor3 #processorNaam").text()
}) 
$("#processor4").on("click", () => {
    $("#processor1").removeClass("selected")
    $("#processor2").removeClass("selected")
    $("#processor3").removeClass("selected")
    $("#processor4").addClass("selected")
    processor = $("#processor4 #processorNaam").text()
}) 
$("#intelProcessor1").on("click", () => {
    $("#intelProcessor1").addClass("selected")
    $("#intelProcessor2").removeClass("selected")
    $("#intelProcessor3").removeClass("selected")
    $("#intelProcessor4").removeClass("selected")
    processor = $("#intelProcessor1 #processorNaam").text()
}) 
$("#intelProcessor2").on("click", () => {
    $("#intelProcessor1").removeClass("selected")
    $("#intelProcessor2").addClass("selected")
    $("#intelProcessor3").removeClass("selected")
    $("#intelProcessor4").removeClass("selected")
    processor = $("#intelProcessor2 #processorNaam").text()
}) 
$("#intelProcessor3").on("click", () => {
    $("#intelProcessor1").removeClass("selected")
    $("#intelProcessor2").removeClass("selected")
    $("#intelProcessor3").addClass("selected")
    $("#intelProcessor4").removeClass("selected")
    processor = $("#intelProcessor3 #processorNaam").text()
}) 
$("#intelProcessor4").on("click", () => {
    $("#intelProcessor1").removeClass("selected")
    $("#intelProcessor2").removeClass("selected")
    $("#intelProcessor3").removeClass("selected")
    $("#intelProcessor4").addClass("selected")
    processor = $("#intelProcessor4 #processorNaam").text()
}) 

// moederbord samenstellen
$("#moederbord1").on("click", () => {
    $("#moederbord1").addClass("selected")
    $("#moederbord2").removeClass("selected")
    $("#moederbord3").removeClass("selected")
    $("#moederbord4").removeClass("selected")
    moederbord = $("#moederbord1 #moederbordNaam").text()
    
    
}) 
$("#moederbord2").on("click", () => {
    $("#moederbord1").removeClass("selected")
    $("#moederbord2").addClass("selected")
    $("#moederbord3").removeClass("selected")
    $("#moederbord4").removeClass("selected")
    moederbord = $("#moederbord2 #moederbordNaam").text()

    
}) 
$("#moederbord3").on("click", () => {
    $("#moederbord1").removeClass("selected")
    $("#moederbord2").removeClass("selected")
    $("#moederbord3").addClass("selected")
    $("#moederbord4").removeClass("selected")
    moederbord = $("#moederbord3 #moederbordNaam").text()
    
}) 
$("#moederbord4").on("click", () => {
    $("#moederbord1").removeClass("selected")
    $("#moederbord2").removeClass("selected")
    $("#moederbord3").removeClass("selected")
    $("#moederbord4").addClass("selected")
    moederbord = $("#moederbord4 #moederbordNaam").text()
    
}) 
$("#intelMoederbord1").on("click", () => {
    $("#intelMoederbord1").addClass("selected")
    $("#intelMoederbord2").removeClass("selected")
    $("#intelMoederbord3").removeClass("selected")
    $("#intelMoederbord4").removeClass("selected")
    moederbord = $("#intelMoederbord1 #moederbordNaam").text()

    
    
}) 
$("#intelMoederbord2").on("click", () => {
    $("#intelMoederbord1").removeClass("selected")
    $("#intelMoederbord2").addClass("selected")
    $("#intelMoederbord3").removeClass("selected")
    $("#intelMoederbord4").removeClass("selected")
    moederbord = $("#intelMoederbord2 #moederbordNaam").text()

    
}) 
$("#intelMoederbord3").on("click", () => {
    $("#intelMoederbord1").removeClass("selected")
    $("#intelMoederbord2").removeClass("selected")
    $("#intelMoederbord3").addClass("selected")
    $("#intelMoederbord4").removeClass("selected")
    moederbord = $("#intelMoederbord3 #moederbordNaam").text()

    
}) 
$("#intelMoederbord4").on("click", () => {
    $("#intelMoederbord1").removeClass("selected")
    $("#intelMoederbord2").removeClass("selected")
    $("#intelMoederbord3").removeClass("selected")
    $("#intelMoederbord4").addClass("selected")
    moederbord = $("#intelMoederbord4 #moederbordNaam").text()

    
}) 

// ram samenstellen
$("#ram1").on("click", () => {
    $("#ram1").addClass("selected")
    $("#ram2").removeClass("selected")
    $("#ram3").removeClass("selected")
    $("#ram4").removeClass("selected")
    ram = $("#ram1 #ramNaam").text()

    
}) 
$("#ram2").on("click", () => {
    $("#ram1").removeClass("selected")
    $("#ram2").addClass("selected")
    $("#ram3").removeClass("selected")
    $("#ram4").removeClass("selected")
    ram = $("#ram2 #ramNaam").text()


}) 
$("#ram3").on("click", () => {
    $("#ram1").removeClass("selected")
    $("#ram2").removeClass("selected")
    $("#ram3").addClass("selected")
    $("#ram4").removeClass("selected")
    ram = $("#ram3 #ramNaam").text()
    

}) 
$("#ram4").on("click", () => {
    $("#ram1").removeClass("selected")
    $("#ram2").removeClass("selected")
    $("#ram3").removeClass("selected")
    $("#ram4").addClass("selected")
    ram = $("#ram4 #ramNaam").text()
   
}) 

// gpu samenstellen
$("#gpu1").on("click", () => {
    $("#gpu1").addClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu1 #gpuNaam").text()


    
}) 
$("#gpu2").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").addClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu2 #gpuNaam").text()


}) 
$("#gpu3").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").addClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu3 #gpuNaam").text()


}) 
$("#gpu4").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").addClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu4 #gpuNaam").text()


}) 
$("#gpu5").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").addClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu5 #gpuNaam").text()


    
}) 
$("#gpu6").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").addClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu6 #gpuNaam").text()


}) 
$("#gpu7").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").addClass("selected")
    $("#gpu8").removeClass("selected")
    gpu = $("#gpu7 #gpuNaam").text()


}) 
$("#gpu8").on("click", () => {
    $("#gpu1").removeClass("selected")
    $("#gpu2").removeClass("selected")
    $("#gpu3").removeClass("selected")
    $("#gpu4").removeClass("selected")
    $("#gpu5").removeClass("selected")
    $("#gpu6").removeClass("selected")
    $("#gpu7").removeClass("selected")
    $("#gpu8").addClass("selected")
    gpu = $("#gpu8 #gpuNaam").text()


}) 


// opslag samenstellen
$("#opslag1").on("click", () => {
    $("#opslag1").addClass("selected")
    $("#opslag2").removeClass("selected")
    $("#opslag3").removeClass("selected")
    $("#opslag4").removeClass("selected")
    opslag = $("#opslag1 #opslagNaam").text()
    
    
}) 
$("#opslag2").on("click", () => {
    $("#opslag1").removeClass("selected")
    $("#opslag2").addClass("selected")
    $("#opslag3").removeClass("selected")
    $("#opslag4").removeClass("selected")
    opslag = $("#opslag2 #opslagNaam").text()
    

}) 
$("#opslag3").on("click", () => {
    $("#opslag1").removeClass("selected")
    $("#opslag2").removeClass("selected")
    $("#opslag3").addClass("selected")
    $("#opslag4").removeClass("selected")
    opslag = $("#opslag3 #opslagNaam").text()
    

}) 
$("#opslag4").on("click", () => {
    $("#opslag1").removeClass("selected")
    $("#opslag2").removeClass("selected")
    $("#opslag3").removeClass("selected")
    $("#opslag4").addClass("selected")
    opslag = $("#opslag4 #opslagNaam").text()
    

}) 

// behuizing samenstellen
$("#behuizing1").on("click", () => {
    $("#behuizing1").addClass("selected")
    $("#behuizing2").removeClass("selected")
    $("#behuizing3").removeClass("selected")
    $("#behuizing4").removeClass("selected")
    behuizing = $("#behuizing1 #behuizingNaam").text()

}) 
$("#behuizing2").on("click", () => {
    $("#behuizing1").removeClass("selected")
    $("#behuizing2").addClass("selected")
    $("#behuizing3").removeClass("selected")
    $("#behuizing4").removeClass("selected")
    behuizing = $("#behuizing2 #behuizingNaam").text()

}) 
$("#behuizing3").on("click", () => {
    $("#behuizing1").removeClass("selected")
    $("#behuizing2").removeClass("selected")
    $("#behuizing3").addClass("selected")
    $("#behuizing4").removeClass("selected")
    behuizing = $("#behuizing3 #behuizingNaam").text()

}) 
$("#behuizing4").on("click", () => {
    $("#behuizing1").removeClass("selected")
    $("#behuizing2").removeClass("selected")
    $("#behuizing3").removeClass("selected")
    $("#behuizing4").addClass("selected")
    behuizing = $("#behuizing4 #behuizingNaam").text()

}) 

// voeding samenstellen
$("#voeding1").on("click", () => {
    $("#voeding1").addClass("selected")
    $("#voeding2").removeClass("selected")
    $("#voeding3").removeClass("selected")
    voeding = $("#voeding1 #voedingNaam").text()
}) 
$("#voeding2").on("click", () => {
    $("#voeding1").removeClass("selected")
    $("#voeding2").addClass("selected")
    $("#voeding3").removeClass("selected")
    voeding = $("#voeding2 #voedingNaam").text()

}) 
$("#voeding3").on("click", () => {
    $("#voeding1").removeClass("selected")
    $("#voeding2").removeClass("selected")
    $("#voeding3").addClass("selected")
    voeding = $("#voeding3 #voedingNaam").text()
    
}) 

// verder knop 
$(".verdernavbutton").on("click", () => {
    if($("#processor1").hasClass("selected") || $("#processor2").hasClass("selected") || $("#processor3").hasClass("selected") || $("#processor4").hasClass("selected") || $("#intelProcessor1").hasClass("selected") || $("#intelProcessor2").hasClass("selected") || $("#intelProcessor3").hasClass("selected") || $("#intelProcessor4").hasClass("selected") ) {
        if($("#moederbord1").hasClass("selected") || $("#moederbord2").hasClass("selected") || $("#moederbord3").hasClass("selected") || $("#moederbord4").hasClass("selected") || $("#intelMoederbord1").hasClass("selected") || $("#intelMoederbord2").hasClass("selected") || $("#intelMoederbord3").hasClass("selected") || $("#intelMoederbord4").hasClass("selected")) {
            if($("#ram1").hasClass("selected") || $("#ram2").hasClass("selected") || $("#ram3").hasClass("selected") || $("#ram4").hasClass("selected")) {
                if($("#gpu1").hasClass("selected") || $("#gpu2").hasClass("selected") || $("#gpu3").hasClass("selected") || $("#gpu4").hasClass("selected") || $("#gpu5").hasClass("selected") || $("#gpu6").hasClass("selected") || $("#gpu7").hasClass("selected") || $("#gpu8").hasClass("selected")) {
                    if($("#opslag1").hasClass("selected") || $("#opslag2").hasClass("selected") || $("#opslag3").hasClass("selected") || $("#opslag4").hasClass("selected")) {
                        if($("#behuizing1").hasClass("selected") || $("#behuizing2").hasClass("selected") || $("#behuizing3").hasClass("selected") || $("#behuizing4").hasClass("selected")) {
                            if($("#voeding1").hasClass("selected") || $("#voeding2").hasClass("selected") || $("#voeding3").hasClass("selected") || $("#voeding4").hasClass("selected")) {
                                $("#inputProcessor").val(processor)
                                $("#inputMoederbord").val(moederbord)
                                $("#inputRam").val(ram)
                                $("#inputGpu").val(gpu)
                                $("#inputOpslag").val(opslag)
                                $("#inputBehuizing").val(behuizing)
                                $("#inputVoeding").val(voeding)
                                $(".verdernavbutton").attr("type", "submit")
                            } else {
                                $([document.documentElement, document.body]).animate({
                                    scrollTop: $("#voeding1").offset().top
                                }, 1500);
                            }
                        } else {
                            $([document.documentElement, document.body]).animate({
                                scrollTop: $("#behuizing1").offset().top
                            }, 1500);
                        }
                    } else {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#opslag1").offset().top
                        }, 1500);
                    }
                } else {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("#gpu1").offset().top
                    }, 1500);
                }
            } else {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#ram1").offset().top
                }, 1500);
            }
        } else {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#moederborden").offset().top
            }, 1500);
        }
    } else {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#processors").offset().top
        }, 1500);
    }
})
})