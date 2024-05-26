<?php
require_once 'connection.php';
$stmt = $dbh->prepare("CALL update_flori(:old_nume, :new_nume)");
$stmt->bindParam(':old_nume', $old_nume);
$stmt->bindParam(':new_nume', $new_nume);

$old_nume = 'toporasi';
$new_nume = 'lalele';
$stmt->execute();

echo "Record updated";
$dbh = null;
?>
