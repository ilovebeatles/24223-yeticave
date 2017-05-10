<?php
require_once 'functions.php';
require_once('./models/lots.php');
$id = isset($_GET['id']) ? $_GET['id'] : null;
$is_valid_id = $id || $id === '0' ? array_key_exists($id, $lotsData) : null;

if (!$is_valid_id) {
    header("HTTP/1.1 404 Not Found");
    return;
} else {
    $lot = $lotsData[$id];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>DC Ply Mens 2016/2017 Snowboard</title>
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?= include_template('header.php'); ?>

<main>
    <?= include_template('lot.php', ['lot' => $lot]); ?>
</main>

<?= include_template('footer.php'); ?>

</body>
</html>
