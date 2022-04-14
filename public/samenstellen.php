<?php 
    require_once("../public/header.php");

    // amd selectie
    $processorAmd1;
    $processorAmd2;
    $processorAmd3;
    $processorAmd4;
    
    $db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

    $count = 1;

    $query = ("SELECT * FROM `components` WHERE type = 'processorAmd'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($processor = $statement->fetch()) {
        if($count == 1) {
            $processorAmd1 = $processor;
            $count+=1;
        } elseif($count == 2) {
            $processorAmd2 = $processor;
            $count+=1;
        } elseif($count == 3) {
            $processorAmd3 = $processor;
            $count+=1;
        } elseif($count == 4) {
            $processorAmd4 = $processor;
            $count=1;
        }
    }

    // intel selectie
    $processorIntel1;
    $processorIntel2;
    $processorIntel3;
    $processorIntel4;
    

    $count = 1;

    $query = ("SELECT * FROM `components` WHERE type = 'processorIntel'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($processor = $statement->fetch()) {
        if($count == 1) {
            $processorIntel1 = $processor;
            $count+=1;
        } elseif($count == 2) {
            $processorIntel2 = $processor;
            $count+=1;
        } elseif($count == 3) {
            $processorIntel3 = $processor;
            $count+=1;
        } elseif($count == 4) {
            $processorIntel4 = $processor;
            $count=1;
        }
    }

// amd moederbord selectie
$moederbordAmd1;
$moederbordAmd2;
$moederbordAmd3;
$moederbordAmd4;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'moederbordAmd'");
$statement = $db->prepare($query);
$statement->execute();
while($moederbord = $statement->fetch()) {
    if($count == 1) {
        $moederbordAmd1 = $moederbord;
        $count+=1;
    } elseif($count == 2) {
        $moederbordAmd2 = $moederbord;
        $count+=1;
    } elseif($count == 3) {
        $moederbordAmd3 = $moederbord;
        $count+=1;
    } elseif($count == 4) {
        $moederbordAmd4 = $moederbord;
        $count=1;
    }
}

// amd moederbord selectie
$moederbordIntel1;
$moederbordIntel2;
$moederbordIntel3;
$moederbordIntel4;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'moederbordIntel'");
$statement = $db->prepare($query);
$statement->execute();
while($moederbord = $statement->fetch()) {
    if($count == 1) {
        $moederbordIntel1 = $moederbord;
        $count+=1;
    } elseif($count == 2) {
        $moederbordIntel2 = $moederbord;
        $count+=1;
    } elseif($count == 3) {
        $moederbordIntel3 = $moederbord;
        $count+=1;
    } elseif($count == 4) {
        $moederbordIntel4 = $moederbord;
        $count=1;
    }
}

// ram selectie
$ram1;
$ram2;
$ram3;
$ram4;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'ram'");
$statement = $db->prepare($query);
$statement->execute();
while($ram = $statement->fetch()) {
    if($count == 1) {
        $ram1 = $ram;
        $count+=1;
    } elseif($count == 2) {
        $ram2 = $ram;
        $count+=1;
    } elseif($count == 3) {
        $ram3 = $ram;
        $count+=1;
    } elseif($count == 4) {
        $ram4 = $ram;
        $count=1;
    }
}

// gpu selectie
$gpu1;
$gpu2;
$gpu3;
$gpu4;
$gpu5;
$gpu6;
$gpu7;
$gpu8;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'gpu'");
$statement = $db->prepare($query);
$statement->execute();
while($gpu = $statement->fetch()) {
    if($count == 1) {
        $gpu1 = $gpu;
        $count+=1;
    } elseif($count == 2) {
        $gpu2 = $gpu;
        $count+=1;
    } elseif($count == 3) {
        $gpu3 = $gpu;
        $count+=1;
    } elseif($count == 4) {
        $gpu4 = $gpu;
        $count+=1;
    } elseif($count == 5) {
        $gpu5 = $gpu;
        $count+=1;
    } elseif($count == 6) {
        $gpu6 = $gpu;
        $count+=1;
    } elseif($count == 7) {
        $gpu7 = $gpu;
        $count+=1;
    } elseif($count == 8) {
        $gpu8 = $gpu;
        $count=1;
    } 
}

// opslag selectie
$opslag1;
$opslag2;
$opslag3;
$opslag4;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'opslag'");
$statement = $db->prepare($query);
$statement->execute();
while($opslag = $statement->fetch()) {
    if($count == 1) {
        $opslag1 = $opslag;
        $count+=1;
    } elseif($count == 2) {
        $opslag2 = $opslag;
        $count+=1;
    } elseif($count == 3) {
        $opslag3 = $opslag;
        $count+=1;
    } elseif($count == 4) {
        $opslag4 = $opslag;
        $count=1;
    }
}

// behuizing selectie
$behuizing1;
$behuizing2;
$behuizing3;
$behuizing4;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'behuizing'");
$statement = $db->prepare($query);
$statement->execute();
while($behuizing = $statement->fetch()) {
    if($count == 1) {
        $behuizing1 = $behuizing;
        $count+=1;
    } elseif($count == 2) {
        $behuizing2 = $behuizing;
        $count+=1;
    } elseif($count == 3) {
        $behuizing3 = $behuizing;
        $count+=1;
    } elseif($count == 4) {
        $behuizing4 = $behuizing;
        $count=1;
    }
}

// voeding selectie
$voeding1;
$voeding2;
$voeding3;
$voeding4;


$count = 1;

$query = ("SELECT * FROM `components` WHERE type = 'voeding'");
$statement = $db->prepare($query);
$statement->execute();
while($voeding = $statement->fetch()) {
    if($count == 1) {
        $voeding1 = $voeding;
        $count+=1;
    } elseif($count == 2) {
        $voeding2 = $voeding;
        $count+=1;
    } elseif($count == 3) {
        $voeding3 = $voeding;
        $count+=1;
    } 
}




?>
<!DOCTYPE html>
<script>
    
</script>
<html lang="en">
    <script src="//code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="..\public\js\samenstellen.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="samenstellenbanner">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <H1>Samenstellen</H1>
        <p>U kiest wij bouwen</p>
    </div>
    <div class="none">
    <img src="../public/images/components/AmdRyzen2200G.png">

    </div>
    <div class="samenstellenInfo">
        <br>
            <h1>Hoe werkt het?</h1>
</div>
    <div class="samenstellenintro">
       <div class="links">
           <br>
           <h2>Selecteren</h2>
           <p>Bij het samenstellen van je eigen pc begin je met het selecteren van je componenten.
                 Bij alle componenten staat een beschrijving met wat het precies inhoud en hoe het component presteert.</p>
       </div>
       <div class="midden">
           <br>
        <h2>Verzenden</h2>
        <p>Nadat u alle componenten heeft geselecteerd en heeft betaald wordt de pc in elkaar gezet en getest door één van onze specialisten en wordt de pc verzonden.</p>
       </div>
       <div class="rechts">
           <br>
           <h2>En spelen</h2>
           <p>Zodra de pc in huis is kunt u gelijk genieten!</p>
       </div>
    </div>
    <nav class="knopbar"> <a href="#" class="beginsamenstellenknop">nu samenstellen</a> </nav>
    <div class="samenstellencontainer">
        <div class="samenstellenClass">
            
            <div class="links">
                <img src="../public/images/intelLogo.png">
            </div>
            <div class="rechts">
                <img src="../public/images/amdLogo.png">
            </div>
        </div>
    <nav class="samenstellenClassInfo" id="processors">
        <h1>Processor</h1>
    </nav>
    <div class="samenstellenDiv" id="amdProcessors">
    <div class="samenstellenSelectie" id="processor1">
                    <a>
                    <p id="processorNaam"><?php echo $processorAmd1[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorAmd1[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorAmd1[2] ?></p>
                    <p><?php echo $processorAmd1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="processor2">
                    <a>
                    <p id="processorNaam"><?php echo $processorAmd2[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorAmd2[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorAmd2[2] ?></p>
                    <p><?php echo $processorAmd2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="processor3">
                    <a>
                    <p id="processorNaam"><?php echo $processorAmd3[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorAmd3[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorAmd3[2] ?></p>
                    <p><?php echo $processorAmd3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="processor4">
                    <a>
                    <p id="processorNaam"><?php echo $processorAmd4[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorAmd4[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorAmd4[2] ?></p>
                    <p><?php echo $processorAmd4[3] ?></p>
                    </a>
                </div>
    </div>
    <div class="samenstellenDiv" id="intelProcessors">
    <div class="samenstellenSelectie" id="intelProcessor1">
                    <a>
                    <p id="processorNaam"><?php echo $processorIntel1[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorIntel1[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorIntel1[2] ?></p>
                    <p><?php echo $processorIntel1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="intelProcessor2">
                    <a>
                    <p id="processorNaam"><?php echo $processorIntel2[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorIntel2[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorIntel2[2] ?></p>
                    <p><?php echo $processorIntel2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="intelProcessor3">
                    <a>
                    <p id="processorNaam"><?php echo $processorIntel3[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorIntel3[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorIntel3[2] ?></p>
                    <p><?php echo $processorIntel3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="intelProcessor4">
                    <a>
                    <p id="processorNaam"><?php echo $processorIntel4[1] ?></p>
                    <div class="pcimage">
                        <img src=<?php echo "../public/images/components/". $processorIntel4[4] . ".png"?>>
                    </div>
                    <p><?php echo "€" . $processorIntel4[2] ?></p>
                    <p><?php echo $processorIntel4[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="samenstellenClassInfo" id="moederborden">
        <h1>Moederbord</h1>
    </nav>
    <div class="samenstellenDiv" id="amdMoederborden">
    <div class="samenstellenSelectie" id="moederbord1">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordAmd1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordAmd1[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordAmd1[2] ?></p>
                    <p><?php echo $moederbordAmd1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="moederbord2">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordAmd2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordAmd2[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordAmd2[2] ?></p>
                    <p><?php echo $moederbordAmd1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="moederbord3">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordAmd3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordAmd3[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordAmd3[2] ?></p>
                    <p><?php echo $moederbordAmd3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="moederbord4">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordAmd4[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordAmd4[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordAmd4[2] ?></p>
                    <p><?php echo $moederbordAmd4[3] ?></p>
                    </a>
                </div>
    </div>
    <div class="samenstellenDiv" id="intelMoederborden">
    <div class="samenstellenSelectie" id="intelMoederbord1">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordIntel1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordIntel1[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordIntel1[2] ?></p>
                    <p><?php echo $moederbordIntel1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="intelMoederbord2">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordIntel2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordIntel2[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordIntel2[2] ?></p>
                    <p><?php echo $moederbordIntel1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="intelMoederbord3">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordIntel3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordIntel3[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordIntel3[2] ?></p>
                    <p><?php echo $moederbordIntel3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="intelMoederbord4">
                    <a>
                    <p id="moederbordNaam"><?php echo $moederbordIntel4[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $moederbordIntel4[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $moederbordIntel4[2] ?></p>
                    <p><?php echo $moederbordIntel4[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="samenstellenClassInfo">
        <h1>Geheugen</h1>
    </nav>

    <div class="samenstellenDiv">
    <div class="samenstellenSelectie" id="ram1">
                    <a>
                    <p id="ramNaam"><?php echo $ram1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $ram1[4] . ".png" ?>">
                    </div>
                    <p><?php echo  "€" . $ram1[2] ?></p>
                    <p><?php echo $ram1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="ram2">
                    <a>
                    <p id="ramNaam"><?php echo $ram2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $ram2[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $ram2[2] ?></p>
                    <p><?php echo $ram2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="ram3">
                    <a>
                    <p id="ramNaam"><?php echo $ram3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $ram3[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $ram3[2] ?></p>
                    <p><?php echo $ram3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="ram4">
                    <a>
                    <p id="ramNaam"><?php echo $ram4[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $ram4[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $ram4[2] ?></p>
                    <p><?php echo $ram4[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="samenstellenClassInfo">
        <h1>Grafische kaart</h1>
    </nav>
    <div class="samenstellenDiv">
    <div class="samenstellenSelectie" id="gpu1">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu1[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" .  $gpu1[2] ?></p>
                    <p><?php echo $gpu1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="gpu2">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu2[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu2[2] ?></p>
                    <p><?php echo $gpu2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="gpu3">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu3[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu3[2] ?></p>
                    <p><?php echo $gpu3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="gpu4">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu4[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu4[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu4[2] ?></p>
                    <p><?php echo $gpu4[3] ?></p>
                    </a>
                </div>
    </div>
    <div class="samenstellenDiv">
    <div class="samenstellenSelectie" id="gpu5">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu5[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu5[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu5[2] ?></p>
                    <p><?php echo $gpu5[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="gpu6">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu6[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu6[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu6[2] ?></p>
                    <p><?php echo $gpu6[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="gpu7">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu7[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu7[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu7[2] ?></p>
                    <p><?php echo $gpu7[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="gpu8">
                    <a>
                    <p id="gpuNaam"><?php echo $gpu8[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $gpu8[4] . ".png" ?>">
                    </div>
                    <p><?php echo "€" . $gpu8[2] ?></p>
                    <p><?php echo $gpu8[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="samenstellenClassInfo">
        <h1>Opslag</h1>
    </nav>
    <div class="samenstellenDiv">
    <div class="samenstellenSelectie" id="opslag1">
                    <a>
                    <p id="opslagNaam"><?php echo $opslag1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $opslag1[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $opslag1[2] ?></p>
                    <p><?php echo $opslag1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="opslag2">
                    <a>
                    <p id="opslagNaam"><?php echo $opslag2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $opslag2[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $opslag2[2] ?></p>
                    <p><?php echo $opslag2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="opslag3">
                    <a>
                    <p id="opslagNaam"><?php echo $opslag3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $opslag3[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $opslag3[2] ?></p>
                    <p><?php echo $opslag3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="opslag4">
                    <a>
                    <p id="opslagNaam"><?php echo $opslag4[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $opslag4[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $opslag4[2] ?></p>
                    <p><?php echo $opslag4[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="samenstellenClassInfo">
        <h1>Behuizing</h1>
    </nav>
    <div class="samenstellenDiv">
    <div class="samenstellenSelectie" id="behuizing1">
                    <a>
                    <p id="behuizingNaam"><?php echo $behuizing1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $behuizing1[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $behuizing1[2] ?></p>
                    <p><?php echo $behuizing1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="behuizing2">
                    <a>
                    <p id="behuizingNaam"><?php echo $behuizing2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $behuizing2[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $behuizing2[2] ?></p>
                    <p><?php echo $behuizing2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="behuizing3">
                    <a>
                    <p id="behuizingNaam"><?php echo $behuizing3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $behuizing3[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $behuizing3[2] ?></p>
                    <p><?php echo $behuizing3[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="behuizing4">
                    <a>
                    <p id="behuizingNaam"><?php echo $behuizing4[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $behuizing4[4] . ".png"?>">
                    </div>
                    <p><?php echo "€" . $behuizing4[2] ?></p>
                    <p><?php echo $behuizing4[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="samenstellenClassInfo">
        <h1>Voeding</h1>
    </nav>
    <div class="samenstellenDiv">
    <div class="samenstellenSelectie" id="voeding1">
                    <a>
                    <p id="voedingNaam"><?php echo $voeding1[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $voeding1[4] . ".png"?>">
                    </div>
                    <p><?php echo  "€" . $voeding1[2] ?></p>
                    <p><?php echo $voeding1[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="voeding2">
                    <a>
                    <p id="voedingNaam"><?php echo $voeding2[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $voeding2[4] . ".png"?>">
                    </div>
                    <p><?php echo  "€" . $voeding2[2] ?></p>
                    <p><?php echo $voeding2[3] ?></p>
                    </a>
                </div>
                <div class="samenstellenSelectie" id="voeding3">
                    <a>
                    <p id="voedingNaam"><?php echo $voeding3[1] ?></p>
                    <div class="pcimage">
                        <img src="<?php echo "../public/images/components/". $voeding3[4] . ".png"?>">
                    </div>
                    <p><?php echo  "€" . $voeding3[2] ?></p>
                    <p><?php echo $voeding3[3] ?></p>
                    </a>
                </div>
    </div>
    <nav class="verdernav">
        <form method="POST" action="winkelmandjeHandler.php">
            <input type="text" name="processor" class="none" value="" id="inputProcessor">
            <input type="text" name="moederbord" class="none" value="" id="inputMoederbord">
            <input type="text" name="ram" class="none"  value="" id="inputRam">
            <input type="text" name="gpu" class="none"  value="" id="inputGpu">
            <input type="text" name="opslag" class="none"  value="" id="inputOpslag">
            <input type="text" name="behuizing" class="none"  value="" id="inputBehuizing">
            <input type="text" name="voeding" class="none"  value="" id="inputVoeding">
            <input type="button" value="Verder" class="verdernavbutton" name="submit">
        </form>
    </nav>
    </div>
</form>
</body>
</html>
<?php
require_once("../public/footer.php") 
?>