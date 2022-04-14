<?php 
    require_once("..\config\config.php");
    session_start();
    $ingelogd = false;
    if(empty($_SESSION["winkelmandje"])) {
        $_SESSION["winkelmandje"] = array();
        
    } else {
        $_SESSION["winkelmandje"];
    }

    if(isset($_SESSION["user"])) {
        $ingelogd = true;
        // echo $_SESSION["user"]; (debugging)
    } if(isset($_GET["uitloggen"])) {
        session_destroy();
        $ingelogd = false;
        header("location:../public/index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <script src="//code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="..\public\js\header.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouComputers</title>
    <link rel="stylesheet" href="<?php echo CSS_FOLDER;?>">
</head>
<body>
    <nav class="bovennav">
        <a href="#"> <img src="..\public\images\Hamburger.png" alt="" class="hamburger"> </a>
    <a href="index.php"><h1>You<span id="span">Computers</span> </h1></a> 
    <div>
        <table>
            <td>
               <a href="winkelmandje.php"> <img src="..\public\images\winkelmantje.png" alt="Winkelmantje" class="winkelmantjeButton"></a> 
               <a href="#"> <img src="..\public\images\AccountLogo.png" alt="Mijn YouComputer" class="accountButton"></a> 
            </td>
            <nav class="accountout">
        <ul>
        <li>
            <a href="<?php if($ingelogd == true) { echo "account.php"; } else { echo "inlog.php"; } ?>">Mijn account</a>
        </li>
        <li>
            <a href="inlog.php"><?php if($ingelogd == true) { echo ""; } else { echo "Inloggen"; } ?></a>
        </li>
        <li>
            <a href="<?php if($ingelogd == true) { echo "index.php?uitloggen"; } else { echo "registreer.php"; } ?>" name="uitlog">
             <?php if($ingelogd == true) { echo "Uitloggen"; } else { echo "Registreren"; } 
             ?> </a>
        </li>
        </ul>
    </nav>
        </table>
    </div>
    </nav>
    <nav   class="ondernav"> 
       <ul class="navUl">
           <li>
               <a href="index.php">HOME</a> 
               <a href="samenstellen.php">SAMENSTELLEN</a>
               <a href="winkelmandje.php">WINKELMANDJE</a>
               <a href="<?php if($ingelogd == true) { echo "account.php"; } else { echo "inlog.php"; } ?>">MIJN ACCOUNT</a>
               <a href="<?php if($ingelogd == true) { echo "index.php?uitloggen"; } else { echo "registreer.php"; } ?>" name="uitlog">
             <?php if($ingelogd == true) { echo "UITLOGGEN"; } else { echo "REGISTREREN"; } 
             ?> </a>
               <a href="inlog.php"><?php if($ingelogd == true) { echo ""; } else { echo "INLOGGEN"; } ?></a>
           </li>
       </ul> 
    </nav>
    <nav class="hamburgerout">
    <ul >
           <li>
               <a href="index.php">HOME</a>  
           </li>
           <li>
               <a href="samenstellen.php">SAMENSTELLEN</a>
           </li>
           <li>
               <a href="winkelmandje.php">WINKELMANDJE</a>
           </li>
           <li>
            <a href="<?php if($ingelogd == true) { echo "account.php"; } else { echo "inlog.php"; } ?>">Mijn account</a>
        </li>
        <li>
            <a href="inlog.php"><?php if($ingelogd == true) { echo ""; } else { echo "Inloggen"; } ?></a>
        </li>
        <li>
            <a href="<?php if($ingelogd == true) { echo "index.php?uitloggen"; } else { echo "registreer.php"; } ?>" name="uitlog">
             <?php if($ingelogd == true) { echo "Uitloggen"; } else { echo "Registreren"; } 
             ?> </a>
        </li>
       </ul> 
    </nav>
</body>
</html>
               