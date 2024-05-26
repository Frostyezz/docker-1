<?php
require_once 'connection.php';
$stmt = $dbh->prepare("CALL insert_flori(:nume, :culoare, :marime, :pret)");
$stmt->bindParam(':nume', $nume);
$stmt->bindParam(':culoare', $culoare);
$stmt->bindParam(':marime', $marime);
$stmt->bindParam(':pret', $pret);

$nume = 'toporasi';
$culoare = 'mov';
$marime = 'medii';
$pret = '80';
$stmt->execute();

echo "Record inserted";
$dbh = null;
?>
