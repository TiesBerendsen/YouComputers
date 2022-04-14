<?php

    require_once("../public/header.php");

    $db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");
    $products = "";
    
    if(isset($_POST["submit"])) {
        if($ingelogd == false) {
            header("location:../public/inlog.php");
        } elseif($ingelogd == true) {
            $productsArray = $_SESSION["winkelmandje"];
            $userID = $_SESSION["userID"];

           for($i = 0; $i < count($productsArray); $i++) {
                $products .= $productsArray[$i] . " ";
           }

           echo $products;
            

            $query = ("INSERT INTO `orders`(`producten`, `userID`) VALUES ('$products','$userID')");
            $statement = $db->prepare($query);
            if($statement->execute()) {
                $_SESSION["winkelmandje"] = null;
                header("location:../public/index.php");
            } else {
                echo "no inshallah";
            }
            
            
              }

        }
?>