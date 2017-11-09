<!doctype html>
<html>

<head>
	<title>Comptes Rendus Visiteur</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<a href="index.php?uc=compteRenduVisiteur&action=saisie">Saisie d'un nouveau compte-rendu</a> 
	<table border="3">
	<?php
		foreach($lesClients as $leClient)
		{
			$numVisite = $leClient['NUMVISITE'];
			$matriculeVisiteur = $leClient['MATRICULEVISITEUR'];
			$numPraticien = $leClient['NUMPRATICIEN'];
			$codeSpe = $leClient['CODESPE'];
			$dateVisite = $leClient['DATEVISITE'];
			$motifVisite = $leClient['MOTIFIVISITE'];
			$bilanVisite = $leClient['BILANVISITE'];

	?>
		<tr>
			<td><?php echo($numVisite) ?></td>
			<td><?php echo($matriculeVisiteur) ?></td>
			<td><?php echo($numPraticien) ?></td>
			<td><?php echo($codeSpe) ?></td>
			<td><?php echo($dateVisite) ?></td>
			<td><?php echo($motifVisite) ?></td>
			<td><?php echo($bilanVisite) ?></td>
		</tr>
		<?php
	}
?>
</table>


</body>

