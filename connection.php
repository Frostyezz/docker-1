<?php
$hostname = 'mysql_db'; 
$username = 'root';
$password = 'toor'; 
$dbname = 'flowers1'; 
try 
{
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) 
{
    echo $ex->getMessage();
}
?>
