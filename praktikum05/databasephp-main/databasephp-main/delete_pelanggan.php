<?php
require_once 'dbkoneksi.php';

$iddel = $_GET['iddel'];
$query = "DELETE FROM pelanggan WHERE id = $iddel ";
// $delete = $dbh->prepare($query);
$dbh->execute($query);

header('location:list_pelanggan.php');
?>