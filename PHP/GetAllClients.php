<?php

include '../PHP/cnx.php';
$sql = $cnx->prepare("SELECT client.identifiant,client.nom,client.prenom,client.ancienReleve, client.dernierReleve
from client
WHERE client.idcontroleur = ".$_POST['id']);
$sql->execute();

echo "<table>";
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $row)
{
    echo "<tr>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['prenom']."</td>";
    echo "<td>".$row['ancienReleve']."</td>";
    echo "<td>".$row['dernierReleve']."</td>";
    echo "<td></td>";
    echo "</tr>";
}

?>