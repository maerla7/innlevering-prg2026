
<script src="funksjoner.js"> </script>



  <title>Slett klasse</title>
  

  <h1>Slett klasse</h1>

  <p>Velg en klasse du &oslash;nsker &aring; slette</p>

  <form method="post" action="" id="slettklasse" name="slettklasse">

  <select name="klassekode" id="klassekode">
    <option value="">Velg klasse</option>
    <?php include("dynamiske-funksjoner.php"); listeboksklasse(); ?>
  </select> <br/>
  <input type="submit" value="Slett klasse" name="slettklasseknapp" id="slettklasseknapp">

  </form>


<?php

if (isset($_POST ["slettklasseknapp"]))
  {
    $klassekode=$_POST ["klassekode"];
if (!$klassekode) {
  die("venligst velg en klasse");
}
    include("db-tilkobling.php");

if ($rad > 0)
  {
    print ("Kan ikke slette $klassekode fordi den har studenter registrert");
  }
  else {

    $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode'";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");

    print ("F&oslash;lgende klasse er slettet: $klassekode");
  }
    }

?>