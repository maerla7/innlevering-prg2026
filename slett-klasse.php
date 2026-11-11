
<script src="funksjoner.js"> </script>


<!doctype html>
<html>
  <head>
    <title>Slett klasse</title>
  </head>
<body>
  <h1>Slett klasse</h1>

  <p>Velg en klasse du &oslash;nsker &aring; slette</p>

  <form method="post" action="" id="slett-klasse" name="slett-klasse">

  <select name="klasskode" id="klassekode">
    <option value="">Velg klasse</option>
    <?php include("dynamiske-funksjoner.php"); listeboksklasse(); ?>
  </select> <br/>
  <input type="submit" value="Slett klasse" id="slettklasse">

  </form>

</body>
</html>

<?php

if (isset($_POST ["slettklasse"]))
  {
    $klassekode=$_POST ["klassekode"];

    include("db-tilkobling.php");

    $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");

    print ("F&oslash;lgende klasse er slettet: $klassekode");
  }

?>