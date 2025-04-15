<?php
require("config.php");
$station=$_POST["station"];
$dc=$_POST["dc"];


$sql="SELECT * from mesure where idstation='$station'";
$res=mysqli_query($conn,$sql);
$en=mysqli_fetch_array($res);
?>
<p><b>Station : </b> <?php echo $en[0];?></p>
<table border="1">
    <tr>
        <th>saison </th>
        <th>Annee</th>
        <th> Mesures energistree </th>
    </tr>
    <?php
    while($en=mysqli_fetch_array($res)){
        if ($dc=="temerature"){
            $sql="SELECT saison,annee,temperature from mesure , station where idstation='$station' and  mesure.idstation=station.idstation";
            echo $sql;
            $res=mysqli_query($conn,$sql);
            ?>
            <tr>
            <td><?php echo $en[0];?></td>
            <td><?php echo $en[1];?></td>
            <td><?php echo $en[2];?></td>
        </tr>
        <?php
        }
        else{
            while($en=mysqli_fetch_array($res)){
                $sql="SELECT saison,annee,pluie from mesure,station where idstation='$station' and  mesure.idstation=station.idstation ORDER BY saison, annee";
                echo $sql;
                $res=mysqli_query($conn,$sql);
                ?>
                <tr>
                <td><?php echo $en["saison"];?></td>
                <td><?php echo $en["annee"];?></td>
                <td><?php echo $en["pluie"];?></td>
            </tr>
            <?php
            }
        }
        
    }
 

    ?>


</table>
