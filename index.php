<?php require "header.php"; ?>

<?php
require 'connection.php';

$q = $_GET['q'];
echo getArticle($q);
?>

<?php require "footer.php"; ?>
