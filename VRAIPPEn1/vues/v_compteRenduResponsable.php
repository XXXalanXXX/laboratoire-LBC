<!--Simon-->
<!doctype html>
<html>

<head>
	<title>Comptes Rendus</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<form action="indexResponsable.php?uc=compteRendu&action=voirCompteRendu" method="post">
		<p><H1>Liste des comptes rendus </H1><br>

        <table border=3 cellspacing=1 >
            <tr>
            <td>Visiteur :</td><td>Praticien :</td>
            <td>Spécialisation:</td><td>Modtif:</td>
            <td>Bilan :</td>
            </tr> 
        <?php
		
        foreach( $lesComptesRendus as $unCompteRendu)
        {
            $num = $unCompteRendu['num'];
            $matriculeVisiteur =$unCompteRendu['matriculeVisiteurC'];
            $numPraticien = $unCompteRendu['numPraticienC'];
            $codeSpe = $unCompteRendu['codeSpeC'];
            $motif = $unCompteRendu['motifC'];
            $bilan = $unCompteRendu['bilanC'];
            ?>
            <tr>
                <td width=150><?php echo $matriculeVisiteur ?></a></td>
                <td width=150><?php echo $numPraticien ?></td>
                <td width=300><?php echo $codeSpe ?></td>
                <td width=100><?php echo $motif ?></td>
                <td width=200><?php echo $bilan ?></td>
                
            </tr>
            <?php 
        }
        ?>
        </table>

</body>