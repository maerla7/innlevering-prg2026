<!doctype html>
<html>
  <head>
    <title>Tabell over studenter</title>
  </head>
  <body>
    <h2>Tabell over studenter</h2>

    <form method="post"
    action=""
    id="studenter-tabell"
    name="studenter-tabell" >


    </form>
  </body>
</html>

<?php

include("db-tilkobling.php");

$sqlSetning="SELECT * FROM klasse;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
$antallRader=mysqli_num_rows($sqlresultat);

print ("<h2>Tabell over studenter</h2>");
print ("<table border=1");
print ("<tr> <th align=left>brukernavn</th> <th align=left>fornavn</th> <th align=left>etternavn</th> <th align=left>klassekode</th> </tr>");

for ($r=1;$r<=$antallRader;$r++)
  {
    $rad=mysqli_fetch_array($sqliResultat);
    $brukernavn=$rad[0];
    $fornavn=$rad[1];
    $etternavn=$rad[2];
    $klassekode=$rad[3];

    print ("<tr> <td>$brukernavn</td> <td>$fornavn</td> <td>$etternavn</td> <td>$klassekode</td> </tr>");
  }

    print ("</table>");

    
?>