<?php
require_once("../public/header.php");

$userID = $_SESSION["userID"];
$bestelling = "";
$bestellingTotaal = 0;

?>

<!DOCTYPE html>
<html lang="en">
    <script src="//code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="..\public\js\account.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="accountscreen">
<div class="accountnav">
    <ul>
        <a class="gegevensknop">
        <li>
           Gegevens
        </li>
        </a>
        <a class="bestellingenknop">
        <li>
            Bestellingen
        </li>
        </a>
        </a>
        <a href="account.php?uitloggen">
            <li>
                Uitloggen
            </li>
        </a>
        
    </ul>
</div>
<div class="accountContainer">
    <div class="gegevens">
    <h1>Uw account gegevens</h1>
        <table>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php  echo $_SESSION["useremail"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Gebruikersnaam:
                </td>
                <td>
                   <?php echo $_SESSION["user"];  ?>
                </td>
            </tr>
            <tr>
                <td>
                    telefoonnummer:
                </td>
                <td>
                    <?php echo $_SESSION["telefoonnummer"] ?>
                </td>
            </tr>
            <tr>
                <td>
                    straat + huisnummer:
                </td>
                <td>
                   <?php echo $_SESSION["straathuisnummer"]  ?>
                </td>
            </tr>
            <tr>
                <td>
                    postcode:
                </td>
                <td>
                   <?php echo $_SESSION["postcode"] ?>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <a href="gegevenswijzigen.php" class="verdernavbutton">Wijzigen</a>
    </div>
    <div class="bestellingen">
        <h1>Uw bestellingen</h1>
        <br>
        <br>

        <?php 

            $db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

            if($_SESSION["useremail"] != "admin@admin.com") {

            $query = ("SELECT * FROM orders WHERE userID = '$userID'");
            $statement = $db->prepare($query);
            $statement->execute();
            $orders = $statement->fetchAll(); 


            foreach($orders as $order) {
                $products = explode(" ", $order[1]);
                foreach($products as $product) {
                    $query = ("SELECT name, price FROM components WHERE ID = '$product'");
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $bestellingPart = $statement->fetch();

                    $bestelling .= $bestellingPart[0] . "<br>";
                    $bestellingTotaal += $bestellingPart[1];
                }

                echo "<section>
                <div>
                <h3>ordernummer</h3>
                <p>$order[0]</p>
                </div>
                <div>
                <h3>producten</h3>
                <p>$bestelling</p>
                </div>
                <div>
                <h3>totaalprijs</h3>
                <p> €$bestellingTotaal</p>
                </div>
                </section>";
                $bestelling = "";
                $bestellingTotaal = 0;
                } 
            } else {
                $query = ("SELECT * FROM `orders` ORDER BY ordernummer DESC");
                $statement = $db->prepare($query);
                $statement->execute();
                $orders = $statement->fetchAll(); 
    
    
                foreach($orders as $order) {
                    $products = explode(" ", $order[1]);
                    foreach($products as $product) {
                        $query = ("SELECT name, price FROM components WHERE ID = '$product'");
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $bestellingPart = $statement->fetch();
    
                        $bestelling .= $bestellingPart[0] . "<br>";
                        $bestellingTotaal += $bestellingPart[1];
                    }

                    $query = ("SELECT `email`, `username`, `ID`, `telefoonnummer`, `straathuisnummer`, `postcode` FROM `users` WHERE ID = $order[2]");
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $customer = $statement->fetch();
    
                    echo "<section>
                    <div>
                    <h3>ordernummer</h3>
                    <p>$order[0]</p>
                    </div>
                    <div>
                    <h3>producten</h3>
                    <p>$bestelling</p>
                    </div>
                    <div>
                    <h3>Klant Gegevens</h3>
                    <p>
                    $customer[0] <br>
                    $customer[1] <br>
                    Klantnummer: $customer[2] <br>
                    $customer[3] <br>
                    <h3>Verzend gegevens</h3>
                    $customer[4] <br>
                    $customer[5] <br>
                    
                    </p>
                    </div>
                    <div>
                    <h3>totaalprijs</h3>
                    <p> €$bestellingTotaal</p>
                    </div>
                    </section>";
                    $bestelling = "";
                    $bestellingTotaal = 0;
                }
            }
        ?>
    </div>
</div>
</div>
</body>
</html>
<?php 
require_once("../public/footer.php");
?>