<!DOCTYPE html>
<html lang="fr" dir="ltr">
<meta charset="utf8" />
<title>exo POO</title>
<body>
<?php include 'BANKACCOUNT3.php';
$compteAriel = new BANKACCOUNT('Ariel',1000,1.9,'euros');
?>
<p>Bonjour <?=$compteAriel->holder();?>, vous venez d'ouvrir un compte avec un taux d'intérêt de  <?= $compteAriel->interestRate(); ?> et vous y avez déposé un montant de <?= $compteAriel->balance(); ?><?= $compteAriel->currency(); ?>.</p>
<?php 
$compteAriel->Credit(1250);
?>
<p>Vous venez de créditer votre compte de <?= $compteAriel->balance();?> euros et votre nouveau solde est de <?= $compteAriel->balance();?>.</p>
<?php
$compteAriel->Debit(500);
?>
<p> Vous venez de débiter votre compte de <?= $compteAriel->balance();?> euros et votre nouveau solde est de <?= $compteAriel->balance();?>.</p>
</body>
</html>