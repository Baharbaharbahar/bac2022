<?php
require('connexion.php');
$npermis=$_POST["npermis"];
$list=$_POST["list"];
$req="select * from testeur where numpermis='$npermis";
$rep=mysql_query($req)or die (mysql_error());
if (mysql_num_rows($req)==0)
   echo "testeur non inscrit";
   else 
   {
       $req="select * from evaluation where numprmis='$npermis'and idmodele'$list'";
       $rep=mysql_query($req)or die (mysql_error());
       if (mysql_num_rows()==1)
       echo "vous avez deja teste ce modele  ";
   }
   else {
       $d=date('Y-m-d');
       $req="insert into evaluation values ('$nnpermis', '$list','$prenom''$Conduite','$securite','$Confort','$robot')"
       $rep=mysql_query($req)or die (mysql_error())
       if (mysqlaffected_rows()!=-1)
    echo "evaluationenregistree avec success!!"
   }
   mysql_close();








// if (isset($_POST["npermis"])){
//     $npermis=$_POST["npermis"];
// }


// if (mysql_num_rows($req)==0)
//    echo "testeur non inscrit";

// mysql_close(;)


?>