<?php
require_once("../public/header.php");

$db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

    if(isset($_POST["submit"])) {
        $email = $_POST["mail"];
        $password = $_POST["password"];
        $username = "";
        $query = ("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $statement = $db->prepare($query);
        $statement->execute(
             array(
                  'email'     =>     $_POST["mail"],
                  'password'     =>     $_POST["password"]
             )
        );

        $count = $statement->FetchColumn();
          if($count != "")
          {
              $query = ("SELECT username, ID, telefoonnummer, straathuisnummer, postcode  FROM users WHERE email = '$email' and password = '$password';");
              $statement = $db->prepare($query);
              $statement->execute();
              while($user = $statement->fetch()) {
                  $_SESSION["user"] = $user["username"];
                  $_SESSION["useremail"] = $email;
                  $_SESSION["userpassword"] = $password;
                  $_SESSION["telefoonnummer"] = $user["telefoonnummer"];
                  $_SESSION["straathuisnummer"] = $user["straathuisnummer"];
                  $_SESSION["postcode"] = $user["postcode"];
                  $_SESSION["userID"] = $user["ID"];
              }
               header("location:../public/index.php");
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
        <h1>Inloggen</h1>
        <form method="POST" action="#">
        <br>
            <p>Email:</p>
            <input type="email" name="mail" class="invoerveld" required>
            <br>
            <br>
            <p>Wachtwoord:</p>
            <input type="password" name="password" class="invoerveld" required>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" value="Inloggen" class="inlogSubmit" action="#"> 
        </form>
        <br>
        <br>
        <p>Nog geen account? Registreer dan <a href="registreer.php">hier</a> </p>
        <br>
        <br>
        <p>  </p>
    </div>
</body>
</html>
<?php 
require_once("../public/footer.php");
?>
