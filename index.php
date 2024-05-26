<?php
require_once 'connection.php';
$sql = "SELECT * FROM flori";
foreach ($dbh->query($sql) as $row)
{
    print $row['nume'].' - '.$row['culoare'].' - '.$row['marime'].' - '.$row['pret'].' - '.'<br/>';

    $dbh = null;
}
?>
<br/>
<a href="insert.php" target="_blank">Insert a record</a><br/><br/>
<a href="update.php" target="_blank">Update a record</a><br/><br/>
<a href="delete.php" target="_blank">Delete a record</a><br/><br/>
