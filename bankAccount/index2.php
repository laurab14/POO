<!DOCTYPE html>
<html lang="fr" dir="ltr">
<meta charset="utf8" />
<title>exo POO</title>
<body>
<?php include 'BANKACCOUNT2.php';
$compteAriel = new BANKACCOUNT('laura',250,1.7,'€');
?>
<p>Nom du titulaire du compte : <?=$compteAriel->holder();?></p>
<p>Solde du compte : <?= $compteAriel->balance(); ?></p>
<p>Taux d'interet : <?= $compteAriel->interestRate(); ?></p>
<p>Devise : <?= $compteAriel->currency(); ?></p>
<?php 
$bankAccount->Credit(350);
?>
<p><?= $bankAccount->balance();?></p>
<?php
$bankAccount->Debit(590);
?>
<p><?= $bankAccount->balance();?></p>
</body>
</html>