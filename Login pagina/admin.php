<?php
session_start();

if(isset($_SESSION ["user"])&& $_SESSION["user"]["rol"]== "administrator"){
    echo "<h1> Welkom ".$_SESSION[" user"] ["naam"]. " op het admin gedeelte van de website</h1>";
    echo "<p><a href='main.php'>login</a></p>";
}
else {
    echo "je hebt niet genoeg gebruikers rechten voor deze pagina";
        }