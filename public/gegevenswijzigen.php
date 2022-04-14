<?php
require_once("../public/header.php");

$db = new PDO("mysql:host=localhost;dbname=pcbuilder", "root", "");

$userID = $_SESSION["userID"];

if(isset($_POST["submit"])) {
        $email = $_POST["mail"];
        $username = $_POST["gebruikersnaam"];
        $telefoonnummer = $_POST["phone"];
        $straathuisnummer = $_POST["straathuisnummer"];
        $postcode = $_POST["postcode"];
        $query = ("SELECT * FROM users WHERE email = '$email' AND ID != '$userID'");
        $statement = $db->prepare($query);
        $statement->execute(
             array(
                  'email'     =>     $_POST["mail"]
             )
        );

        $count = $statement->FetchColumn();
          if($count == "")
          {
              $query = ("UPDATE `users` SET `email`='$email',`username`='$username',`telefoonnummer`='$telefoonnummer',`straathuisnummer`='$straathuisnummer',`postcode`='$postcode' WHERE ID = $userID");
              $statement = $db->prepare($query);
              $statement->execute();
              $_SESSION["user"] = $username;
              $_SESSION["useremail"] = $email;
              $_SESSION["telefoonnummer"] = $telefoonnummer;
              $_SESSION["straathuisnummer"] = $straathuisnummer;
              $_SESSION["postcode"] = $postcode;
               header("location:../public/account.php");
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
        <h1>Wijzigen</h1>
        <form method="POST" action="#">
        <br>
            <p>Email:</p>
            <input type="email" name="mail" class="invoerveld" value="<?php echo $_SESSION['useremail']?>" required>
            <br>
            <br>
            <p>Gebruikersnaam:</p>
            <input type="text" name="gebruikersnaam" class="invoerveld" value="<?php echo $_SESSION['user']?>" required>
            <br>
            <br>
            <p>telefoonnummer:</p>
            <input type="phone" name="phone" class="invoerveld" value="<?php echo $_SESSION['telefoonnummer']?>" required>
            <br>
            <br>
            <p>Straat + Huisnummer:</p>
            <input type="adres" name="straathuisnummer" class="invoerveld" value="<?php echo $_SESSION['straathuisnummer']?>" required>
            <br>
            <br>
            <p>Postcode:</p>
            <input type="postcode" name="postcode" class="invoerveld" value="<?php echo $_SESSION['postcode']?>" required>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" value="Opslaan" class="inlogSubmit" action="#"> 
        </form>
        <br>
        <br>
    </div>
</body>
</html>
<?php 
require_once("../public/footer.php");
?>
