<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <div class="links">
            <h3>Menu</h3>
            <ul >
                <li>
                    <a href="index.php">Home</a>  
                </li>
                <br>
                <li>
                    <a href="samenstellen.php">Samenstellen</a>
                </li>
                <br>
                <br>
                <br>
            </ul> 
        </div>
        <div class="midden">
            <h3>Account</h3>
            <ul>
                <li>
                    <a href="<?php if($ingelogd == true) { echo "account.php"; } else { echo "inlog.php"; } ?>">Mijn account</a>
                </li>
                <li>
                    <a href="inlog.php">
                    <?php if($ingelogd == true) { echo ""; } else { echo "Inloggen"; } ?></a>
                </li>
                <li>
                    <a href="<?php if($ingelogd == true) { echo "index.php?uitloggen"; } else { echo "registreer.php"; } ?>" name="uitlog">
                     <?php if($ingelogd == true) { echo "Uitloggen"; } else { echo "Registreren"; } 
                     ?> </a>
                </li>
                    <br>
                <li>
                    <a href="winkelmandje.php">Winkelmandje</a>
                </li>
                <br>
                </ul>
        </div>
        <div class="rechts">
            <h3>Contact</h3>
            <ul>
            <li>
                <a href="callto:06-65874697">06-65874697 </a>
            </li>
            <br>
            <li>
                <a href="mailto:You@Computers.nl">You@Computers.nl</a>
            </li>
            <br>
            <br>
            <br>
            </ul>
        </div>
    </footer>
</body>
</html>