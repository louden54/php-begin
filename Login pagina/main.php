<?php
session_start();
include("header.php");

$users = array(
    "piet@onlineworld.nl" => array("pwd" => "doetje123","rol" =>"administrator"),
    "klaas@carpets.nl" => array("pwd" => "snoepje777","rol" =>"gebruiker"),
    "truushendriks@wegweg.nl" => array("pwd" => "arkiearkie201","rol" =>"administrator")

);
if(isset($_GET["loguit"])){
    $_SESSION = array();
    session_destroy();
}
if(isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["pwd"] == $_POST['pwd']){
    $_SESSION["user"] = array("naam" => $_POST["login"],
        "pwd" => $users [$_POST["login"]]["pwd"],
        "rol" => $users [$_POST["login"]]["rol"]);
    $messages ="Welkom " .$_SESSION["user"]["naam"]." met de rol"
        .$_SESSION["user"]["rol"];
}
else {
    $messages ="inloggen";
}
print_r($_SESSION);
?>
<html>
<body>
<h1><?php echo $messages;?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label for="login">login:</label>
        <input type="text" name="login" value=""><br>
        <label for="pwd">wachtwoord:</label>
        <input type="text" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="admin.php">admin</a></p>
<p><a href="main.php?loguit">uitloggen</a></p>
</body>
</html>
<div style="background-color: <?php echo $_GET["favkleur"]?> ; height:200px ; width:200px;"></div>

<?php
include("footer.php");
?>
