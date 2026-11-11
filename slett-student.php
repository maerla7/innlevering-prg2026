
<script src="funksjoner.js"> </script>



  <title>Slett student</title>
  

  <h1>Slett student</h1>

  <p>Velg en student du &oslash;nsker &aring; slette</p>

  <form method="post" action="" id="slettstudent" name="slettstudent">

  <select name="brukernavn" id="brukernavn">
    <option value="">Velg student</option>
    <?php include("dynamiske-funksjoner.php"); listeboksstudent(); ?>
  </select> <br/>
  <input type="submit" value="Slett student" name="slettstudentknapp" id="slettstudentknapp" onclick="return bekreft()">
  
</form>


<?php

if (isset($_POST ["slettstudentknapp"]))
  {
    $brukernavn=$_POST ["brukernavn"];
if (!$brukernavn) {
  die("venligst velg en student");
}
    include("db-tilkobling.php");
  

    $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn'";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");

    print ("F&oslash;lgende student er slettet: $brukernavn");
  
    }

?>