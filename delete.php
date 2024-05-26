<?php
require_once 'connection.php';
$stmt = $dbh->prepare("CALL delete_flori(:nume)");
$stmt->bindParam(':nume', $nume);

$nume = 'lalele';
$stmt->execute();

echo "Record deleted";
$dbh = null;
?>
