<!DOCTYPE html>
<html lang="fr" dir="ltr">
<meta charset="utf8" />
<title>exo POO</title>
<body>
<?php include 'BANKACCOUNT4.php';
for($i=1; $i<=5; $i++){
$bankAccount = new BANKACCOUNT[$holder[$balance,$interestRate,$currency]];

$compte = $bankAccount['John'[1250,'2.3%','euros'],'Jane'[1500,'2.3%','euros'],'David'[12000,'2.3%','euros'],'Toto'[1000,'2.3%','euros'],'Lala'[5000,'2.3%','euros']];
?>
<?php
}
?>
<?php
foreach ($compte as $key => $value) {
?>
<p>Bonjour <?=$compteAriel->holder();?>, vous venez d'ouvrir un compte avec un taux d'intérêt de  <?= $compteAriel->interestRate(); ?> et vous y avez déposé un montant de <?= $compteAriel->balance(); ?><?= $compteAriel->currency(); ?>.</p>
<?php 
$compteAriel->Credit(1250);
?>
<p>Vous venez de créditer votre compte de <?= $compteAriel->Credit($amount);?> euros et votre nouveau solde est de <?= $compteAriel->balance();?>.</p>
<?php
$compteAriel->Debit(500);
?>
<p> Vous venez de débiter votre compte de <?= $compteAriel->balance();?> euros et votre nouveau solde est de <?= $compteAriel->balance();?>.</p>
<?php
}
?>
</body>
</html>