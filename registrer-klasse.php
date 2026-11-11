<!doctype html>
<html>
  <head>
    <title>Registrer klasse</title>
  </head>
  <body>
    <h2>Registrer klasse her</h2>

    <form method="post" action=" "
    id="registrer-klasse"
    name="registrer-klasse" >

    Klassekode: <br/>
      <input type="text" id="klassekode" name="klassekode"/> <br/>

      Klassenavn: <br/>
      <input type="text" id="klassenavn" name="klassenavn" /> <br/>

      Studiumkode: <br/>
      <input type="text" id="studiumkode" name="studiumkode" /> <br/>

    <input type="submit" value="Submit" id="submit" name="submit"/>
    <br/>
    <input type="reset" value="Reset" id="reset" name="reset" />

    </form>
  </body>
</html>

<?php

if (isset($_POST ["submit"]))
  {
    $klassekode=$_POST ["klassekode"];
    $klassenavn=$_POST ["klassenavn"];
    $studiumkode=$_POST ["studiumkode"];

    include "db-tilkobling.php";

$sqlSetning="SELECT * FROM klasse WHERE klassekode='$klassekode'; ";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
$antallRader=mysqli_num_rows($sqlResultat);

if ($antallRader!=0)
  {
    print ("Klassekode er registrert fra f&oslashr");
  }

  else 
    {
      $sqlSetning="INSERT INTO klasse VALUES ('$klassekode'); ";
      mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");

      print ("N&aring er klassekode $klassekode registrert");
    }

  $sqlSetning="SELECT * FROM klasse WHERE klassenavn='$klassenavn';";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
  $antallRader=mysqli_num_rows($sqlResultat);

  if ($antallRader!=0)
    {
      print ("Klassenavn er registrert fra f&oslashr");

    }

    else 
      {
        $sqlSetning="INSERT INTO klasse VALUES('$klassenavn');";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");

        print ("n&aring er klassenavn $klassenavn registrert");
      }

  $sqlSetning="SELECT * FROM klasse WHERE studiumkode='$studiumkode';";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
  $antallRader=mysqli_num_rows($sqlResultat);

  if ($antallRader!=0)
    {
      print ("Studiumkode er registrert fra f&oslashr");

    }

    else 
      {
        $sqlSetning="INSERT INTO klasse VALUES('$studiumkode');";
        mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");

        print ("n&aring er studiumkode $studiumkode registrert");
      }

  }

?>