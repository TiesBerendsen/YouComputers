<?php
    require_once("../public/header.php");

    if(isset($_POST["submit"])) {
        $pc = $_POST["pc"];
        
        if($pc == "budget") {
            array_push($_SESSION["winkelmandje"], 1);
            array_push($_SESSION["winkelmandje"], 9);
            array_push($_SESSION["winkelmandje"], 17);
            array_push($_SESSION["winkelmandje"], 21);
            array_push($_SESSION["winkelmandje"], 29);
            array_push($_SESSION["winkelmandje"], 33);
            array_push($_SESSION["winkelmandje"], 37);
            header("location:../public/winkelmandje.php");
        } elseif($pc == "beginner") {
            array_push($_SESSION["winkelmandje"], 6);
            array_push($_SESSION["winkelmandje"], 13);
            array_push($_SESSION["winkelmandje"], 20);
            array_push($_SESSION["winkelmandje"], 22);
            array_push($_SESSION["winkelmandje"], 29);
            array_push($_SESSION["winkelmandje"], 34);
            array_push($_SESSION["winkelmandje"], 37);
            header("location:../public/winkelmandje.php");
        } elseif($pc == "workstation") {
            array_push($_SESSION["winkelmandje"], 4);
            array_push($_SESSION["winkelmandje"], 11);
            array_push($_SESSION["winkelmandje"], 19);
            array_push($_SESSION["winkelmandje"], 21);
            array_push($_SESSION["winkelmandje"], 32);
            array_push($_SESSION["winkelmandje"], 35);
            array_push($_SESSION["winkelmandje"], 37);
            header("location:../public/winkelmandje.php");
        } else {
            array_push($_SESSION["winkelmandje"], 8);
            array_push($_SESSION["winkelmandje"], 16);
            array_push($_SESSION["winkelmandje"], 19);
            array_push($_SESSION["winkelmandje"], 26);
            array_push($_SESSION["winkelmandje"], 32);
            array_push($_SESSION["winkelmandje"], 36);
            array_push($_SESSION["winkelmandje"], 39);
            header("location:../public/winkelmandje.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <article>
        <!-- <div class="articleImage1"></div> -->
        <div>
            <br>
            <p class="articletitel">Stel je eigen volledig unieke PC samen! </p>
            <p>Zoek jij de perfect game PC, workstation of iets anders?</p> 
            <p>Dan ben je hier op het juiste adres!</p>
            <br>
            <br>
            <nav><a href="samenstellen.php" class="samenstelknop">Stel nu jouw PC samen</a></nav>
    </div>
    <!-- <div class="articleImage2"></div> -->
    </article>
    <section>
            <section class="content">
            <h1>Game PC's</h1>
            <div class="gamepcs">
                <div class="content1">
                <div class="gamepc">
                    <a>
                    <p>Game PC Budget</p>
                    <div class="pcimage">
                        <img src="..\public\images\components\DEEPCOOl.png" alt="">
                    </div>
                    <p>€560</p>
                    <form action="#" method="post">
                        <input type="text" name="pc" value="budget" class="none">
                        <input type="submit" name="submit" value="In winkelmandje" class="verdernavbutton">
                    </form>
                    </a>
                </div>
                <div class="gamepc">
                    <a>
                    <p>Game PC beginner</p>
                    <div class="pcimage">
                    <img src="..\public\images\components\NZXT.png" alt="">
                    </div>
                    <p>€920</p>
                    <form action="#" method="post">
                        <input type="text" name="pc" value="beginner" class="none">
                        <input type="submit" name="submit" value="In winkelmandje" class="verdernavbutton">
                    </form>
                    </a>
                </div>
                <div class="gamepc">
                    <a>
                    <p>Workstation Pro</p>
                    <div class="pcimage">
                        <img src="..\public\images\components\CORSAIR.png" alt="">
                    </div>
                    <p>€1360</p>
                    <form action="#" method="post">
                        <input type="text" name="pc" value="workstation" class="none">
                        <input type="submit" name="submit" value="In winkelmandje" class="verdernavbutton">
                    </form>
                    </a>
                </div>
                <div class="gamepc">
                    <a>
                    <p>Game PC ELITE</p>
                    <div class="pcimage">
                        <img src="..\public\images\components\COOLERMASTER.png" alt="">
                    </div>
                    <p>€4100</p>
                    <form action="#" method="post">
                        <input type="text" name="pc" value="elite" class="none">
                        <input type="submit" name="submit" value="In winkelmandje" class="verdernavbutton">
                    </form>
                    </a>
                </div>
            </div>
            </div>
            </section>
    </section>
</body>
</html>
<?php 
require_once("../public/footer.php")
?>