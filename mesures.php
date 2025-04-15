<?php
require("config.php");
// print_r($_POST);
// Array ( [station] => 60715 [saison] => [annee] => on [temperature] => 30.60 [pluie] => 5


$station=$_POST["station"];
$saison=$_POST["saison"];
$annee=$_POST["annee"];
$temperature=$_POST["temperature"];
$pluie=$_POST["pluie"];

$sql="SELECT * from mesure where idstation='$station' and annee='$annee' and saison='$saison' ";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)==1){
    echo ("<h1>Mesures deja enregistrecs !</h1>");
}else{
    $sql="INSERT into mesure(`idstation`, `annee`, `saison`, `temperature`, `pluie`) values ('$station','$annee','$saison','$temperature','$pluie');";
    $res=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)>0){
        echo ("<h1>Ajout effectue avec succes </h1>");
    }
}





?>