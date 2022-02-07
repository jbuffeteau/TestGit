<?php

include '../PHP/cnx.php';

$sql = $cnx->prepare("select id,nom,prenom from controleur");
$sql->execute();
echo "<h1>Liste des contrôleurs</h1>";
echo "<table>";
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $row)
{
    echo "<tr>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['prenom']."</td>";
    echo "<td><button onclick='GetAllClientsByIdCtrl(".$row['id'].")'>Tous les clients</button></td>";
    echo "</tr>";
}
echo "</table>";

?>