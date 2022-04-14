<?php 

    require_once("../public/header.php");

if(isset($_POST["submit"])) {
    $processor = $_POST["processor"];
    $moederbord = $_POST["moederbord"];
    $ram = $_POST["ram"];
    $gpu = $_POST["gpu"];
    $opslag = $_POST["opslag"];
    $behuizing = $_POST["behuizing"];
    $voeding = $_POST["voeding"];

    $db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

    $query = ("SELECT `ID` FROM `components` WHERE name = '$processor'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $processor = $component[0];
    }

    $query = ("SELECT `ID` FROM `components` WHERE name = '$moederbord'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $moederbord = $component[0];
    }

    $query = ("SELECT `ID` FROM `components` WHERE name = '$ram'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $ram = $component[0];
    }

    $query = ("SELECT `ID` FROM `components` WHERE name = '$gpu'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $gpu = $component[0];
    }

    $query = ("SELECT `ID` FROM `components` WHERE name = '$opslag'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $opslag = $component[0];
    }

    $query = ("SELECT `ID` FROM `components` WHERE name = '$behuizing'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $behuizing = $component[0];
    }

    $query = ("SELECT `ID` FROM `components` WHERE name = '$voeding'");
    $statement = $db->prepare($query);
    $statement->execute();
    while($component = $statement->fetch()) {
        $voeding = $component[0];
    }

    array_push($_SESSION["winkelmandje"], $processor);
    array_push($_SESSION["winkelmandje"], $moederbord);
    array_push($_SESSION["winkelmandje"], $ram);
    array_push($_SESSION["winkelmandje"], $gpu);
    array_push($_SESSION["winkelmandje"], $opslag);
    array_push($_SESSION["winkelmandje"], $behuizing);
    array_push($_SESSION["winkelmandje"], $voeding);

    header("location:../public/winkelmandje.php");
    
}

print_r($_SESSION["winkelmandje"]);

?>