<?php
require_once("../public/header.php");

$db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

    if(isset($_POST["submit"])) {
        $email = $_POST["mail"];
        $username = $_POST["gebruikersnaam"];
        $telefoonnummer = $_POST["phone"];
        $straathuisnummer = $_POST["straathuisnummer"];
        $postcode = $_POST["postcode"];
        $password = $_POST["password"];
        $query = ("SELECT * FROM users WHERE email = '$email'");
        $statement = $db->prepare($query);
        $statement->execute(
             array(
                  'email'     =>     $_POST["mail"]
             )
        );

        $count = $statement->FetchColumn();
          if($count == "")
          {
              $query = ("INSERT INTO `users`(`email`, `username`, `password`, `telefoonnummer`, `straathuisnummer`, `postcode`) VALUES ('$email','$username','$password','$telefoonnummer','$straathuisnummer','$postcode')");
              $statement = $db->prepare($query);
              $statement->execute();
               header("location:../public/inlog.php");
          }
        }

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
    <div class="inlogContainer">
        <br>
        <h1>Registreren</h1>
        <form method="POST" action="#">
        <br>
            <p>Email:</p>
            <input type="email" name="mail" class="invoerveld" required>
            <br>
            <br>
            <p>Gebruikersnaam:</p>
            <input type="text" name="gebruikersnaam" class="invoerveld" required>
            <br>
            <br>
            <p>wachtwoord:</p>
            <input type="password" name="password" class="invoerveld" required>
            <br>
            <br>
            <p>telefoonnummer:</p>
            <input type="phone" name="phone" class="invoerveld">
            <br>
            <br>
            <p>Straat + Huisnummer:</p>
            <input type="adres" name="straathuisnummer" class="invoerveld" required>
            <br>
            <br>
            <p>Postcode:</p>
            <input type="postcode" name="postcode" class="invoerveld" required>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" value="Registreren" class="inlogSubmit" action="#"> 
        </form>
        <br>
        <br>
        <p>Heb je al een account? Log dan <a href="inlog.php">hier</a> in</p>
        <br>
        <br>
    </div>
</body>
</html>
<?php 
require_once("../public/footer.php");
?>
