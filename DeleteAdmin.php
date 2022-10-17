<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<?php
if(isset($_GET["id"])){
  $SearchQueryParameter = $_GET["id"];
  global $ConnectingDB;
  // Supprimer tout de tableau `admins` où `id` est égale à variable $SearchQueryParameter qui récuperera le id
  $sql = "DELETE FROM `admins` WHERE `id` = '$SearchQueryParameter'";
  $Execute = $ConnectingDB->query($sql);
  if ($Execute) {
    $_SESSION["SuccessMessage"]="Admin Deleted Successfully ! ";
    Redirect_to("Admins.php");
    // code...
  }else {
    $_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
    Redirect_to("Admins.php");
  }
}
?>
