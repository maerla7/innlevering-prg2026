<!doctype html>
<html>
  <head>
    <title>Registrer student</title>
  </head>
  <body>
    <h2>Registrer deg som student her</h2>

    <form method="post" action=""
    id="registrer-klasse"
    name="registrer-klasse" >

    Brukernavn: <br/>
      <input type="text" id="brukernavn" name="brukernavn"/> <br/>

      Fornavn: <br/>
      <input type="text" id="fornavn" name="fornavn" /> <br/>

      Etternavn: <br/>
      <input type="text" id="etternavn" name="etternavn" /> <br/>

      Klassekode: <br/>
      <input type="text" id="klassekode" name="klassekode" /> <br/>

    <input type="submit" value="Submit" id="submit" name="submit"/>
    <br/>
    <input type="reset" value="Reset" id="reset" name="reset" />

    </form>
  </body>
</html>

<?php

if (isset($_POST ["submit"]))
  {
    $brukernavn=$_POST ["brukernavn"];
    $fornavn=$_POST ["fornavn"];
    $etternavn=$_POST ["etternavn"];
    $klassekode=$_POST ["klassekode"];


    include "db-tilkobling.php";

$sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn'; ";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
$antallRader=mysqli_num_rows($sqlResultat);

if ($antallRader!=0)
  {
    print ("Studenten er allerede registrert");
  }

  else 
    {
      $sqlSetning="INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode');";
      $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
      if ($sqlResultat) {
        print ("Studenten med $brukernavn, $fornavn, $etternavn og $klassekode er registrert");
      }

      else 
        {
          print ("Studenten finnes ikke i v&aringe systemer");
        }

    }

  }

?>