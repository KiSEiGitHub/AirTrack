<h4> Liste des pilotes</h4>

<table border="1">
	<tr>
		<td> Id Pilote</td>
		<td> Nom </td>
		<td> Prénom </td>
        <td> Age </td>
		<td> Email </td>																							
		<td> Adresse</td>
		<td> Grade </td>
		<td> Opérations </td>
	</tr>
    <?php
	foreach ($lesPilotes as $unPilote) {
		echo "<tr>";
		echo "<td>".$unPilote['idpilote']."</td>";
		echo "<td>".$unPilote['nom']."</td>";
		echo "<td>".$unPilote['prenom']."</td>";
		echo "<td>".$unPilote['age']."</td>";
		echo "<td>".$unPilote['email']."</td>";
		echo "<td>".$unPilote['adresse']."</td>";
        echo "<td>".$unPilote['grade']."</td>";
		echo"<td>";
        echo "</td>";
		echo "</tr>";
    }
    ?>
    </table>