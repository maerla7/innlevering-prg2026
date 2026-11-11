<!doctype html>
<html>
  <head>
    <title>Tabell over klasse</title>
  </head>
  <body>
    <h2>Tabell over klasse</h2>

    <form method="post"
    action=""
    id="klasse-tabell"
    name="klasse-tabell" >


    </form>
  </body>
</html>

<?php

include("db-tilkobling.php");

$sqlSetning="SELECT * FROM klasse;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
$antallRader=mysqli_num_rows($sqlResultat);

print ("<table border=1");
print ("<tr> <th align=left>klassekode</th> <th align=left>klassenavn</th> <th align=left>studiumkode</th> </tr>");

for ($r=1;$r<=$antallRader;$r++)
  {
    $rad=mysqli_fetch_array($sqlResultat);
    $klassekode=$rad[0];
    $klassenavn=$rad[1];
    $studiumkode=$rad[2];

    print ("<tr> <td>$klassekode</td> <td>$klassenavn</td> <td>$studiumkode</td> </tr>");
  }

    print ("</table>");


?>