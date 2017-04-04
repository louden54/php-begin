<?php
    include("header.php");
  $messages = array();

  if(!isset($_GET["roepnaam"]) && !isset($_GET["wachtwoord"])&& !isset($_GET["adres"])&& !isset($_GET["email"])){
      $messages[] = "je moet eerst het formulier invullen";
  }
  else if (strlen($_GET["roepnaam"])<2 ){
      $messages[] = "een naam moet minimaal 2 letters bevatten";
  }
  else if (strlen($_GET["wachtwoord"])<2 ){
      $messages[]= "Ongeldig wachtwoord";
  }
   else if (strlen($_GET["adres"])<2 ){
    $messages[]= "Vul je adres in";
}
   else if (strlen($_GET["email"])<2 ){
    $messages[]= "Vul je email in";
}
if (!count($messages)== 0){
      //messages weergeven
      $html = "<ul>";
      foreach($messages as $message){
          $html .="<li>".$message."</li>";
      }
      $html .="</ul>";
      echo $html;
  }else{
    echo " ".$_GET["roepnaam"];
    echo "<br>";
    echo " ".$_GET["adres"];
    echo "<br>";
    echo " ".$_GET["email"];
    echo "<br>";
    echo " ".$_GET["wachtwoord"];

}
?>
    <div style="background-color: <?php echo $_GET["favkleur"]?> ; height:200px ; width:200px;"></div>

<?php
    include("footer.php");
?>
