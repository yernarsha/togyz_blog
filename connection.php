<?php

function getArticle($q) {
    if (empty($q)) $q = 'index.php';

    $pdo = new PDO('sqlite:blog.sqlite');
    $stm = $pdo->query("SELECT * from `blog` WHERE `url` = " . "'$q'");
    $row = $stm->fetch();

    return $row['body'];
}
