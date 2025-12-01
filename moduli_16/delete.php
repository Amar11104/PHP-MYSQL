<?php
include_once('config.php');
$id = $GET['id'];
$sql = "DLETE FROM users WHERE id=:id";
$prep = $conn->prepare($sql);
$prep->bindParm(':id', $id);
$prep->execute();

header("Location: dashboard.php");
?>