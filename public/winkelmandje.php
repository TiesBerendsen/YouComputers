<?php 
    require_once("..\public\header.php");
    $totaal = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="winkelmantjeContainer">
        <div class="innerContainer">
            <header>
                <h1>Winkelmandje</h1>
            </header>

            <?php

                $db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

                foreach($_SESSION["winkelmandje"] as $component) {

                    $query = ("SELECT * FROM `components` WHERE ID = '$component'");
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $component = $statement->fetch();
                    $totaal += $component[2];

                    echo "<section>
                            <div class=imgDiv>
                                <img src= ../public/images/components/$component[4].png>
                            </div> 
                            <p> $component[1] </p>
                            <p> €$component[2] </p>
                          </section>";  
                }   

                if(empty($_SESSION["winkelmandje"])) {
                   echo "<nav>
                        <p>Winkelmandje is leeg!</p>
                        </nav>";
                } else {
                    echo "
                    <section>
                    <form action=bestellen.php method=POST>
                    <h4>Totaal</h4>
                    <input type=submit name=submit class=verderMetBestellenButton value=Bestellen>
                    </from>
                    <p> €$totaal
                    </section>
                    ";
                }
            ?>
        </div>
    </div>
</body>
</html>

<?php 
    require_once("../public/footer.php") 
?>