<?php
$npermis=$_POST["npermis"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$genre=$_POST["genre"];
require('connexion.php');
if (isset($_POST["npermis"])){
    $npermis=$_POST["npermis"];
}
$req="select * from testeur where numpermis='$npermis";
$rep=mysql_query($req)or die (mysql_error());
if (mysql_num_rows($req)==1)
   echo "num permis existe deja";
else 
{
    $req="insert into testeur values ('$npermis','$nom','$prenom','$genre');";
    $rep=mysql_query($req)or die (mysql_error());
    if (mysql_num_rows()==-1)
    echo "testeur ajoutee avec success ";
}
mysql_close();



?>