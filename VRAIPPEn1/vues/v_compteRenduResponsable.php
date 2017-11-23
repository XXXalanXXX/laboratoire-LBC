<!--Simon-->
<!doctype html>
<html>

<head>
	<title>Comptes Rendus</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div id="accueilResponsable">
    <ul id="menu">
    <li><a href="indexResponsable.php?uc=accueilResponsable"><input id="bouton" type="submit" name="button" value="Accueil"> </a></li>
    <li><a href="indexResponsable.php?uc=CompteRendu"><input id="bouton" type="submit" name="button" value="Les comptes rendus"></a></li>
    <li><a href="indexResponsable.php?uc=voirActivite"><input id="bouton" type="submit" name="button" value="Les activités"> </a></li>
</ul>
</div>

	<form action="indexResponsable.php?uc=CompteRendu&action=voirCompteRendu" method="post">
		<p><H1>Liste des comptes rendus </H1></p><br>

        <table border=3 cellspacing=1 >
            <tr>
            <td>Visiteur :</td><td>Praticien :</td>
            <td>Spécialisation:</td><td>Date</td>
            <td>Modtif:</td><td>Bilan :</td>
            </tr> 
        <?php
		
        foreach( $lesComptesRendus as $unCompteRendu)
        {
            $num = $unCompteRendu['numvisite'];
            $matriculeVisiteur =$unCompteRendu['matriculevisiteur'];
            $nomPraticien = $unCompteRendu['nompraticien'];
            $nomSpe = $unCompteRendu['libellespe'];
            $dateVisite= $unCompteRendu['datevisite'];
            $motif = $unCompteRendu['motifvisite'];            
            $bilan = $unCompteRendu['bilanvisite'];
            ?>
            <tr>
                <td width=150><?php echo $matriculeVisiteur ?></a></td>
                <td width=150><?php echo $nomPraticien ?></td>
                <td width=300><?php echo $nomSpe ?></td>
                <td width=100><?php echo $dateVisite ?></td>
                <td width=100><?php echo $motif ?></td>
                <td width=200><?php echo $bilan ?></td>
                
            </tr>
            <?php 
        }
        ?>
        </table>

</body>