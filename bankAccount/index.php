<!DOCTYPE html>
<html lang="fr" dir="ltr">
<meta charset="utf8" />
<title>exo POO</title>
<body>
<?php include 'BANKACCOUNT.php';
$bankAccount = new BANKACCOUNT();
echo $bankAccount->holder();

?>
<p>Nom du titulaire du compte : <?=$bankAccount->holder();?></p>
<p>Solde du compte : <?= $bankAccount->balance(); ?></p>
<p>Taux d'interet : <?= $bankAccount->interestRate(); ?></p>
<p>Devise : <?= $bankAccount->currency(); ?></p>
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