<?php
// устанавливаем часовой пояс в Московское время
date_default_timezone_set('Europe/Moscow');

// записать в эту переменную оставшееся время в этом формате (ЧЧ:ММ)
$lot_time_remaining = "00:00";

// временная метка для полночи следующего дня
$tomorrow = strtotime('tomorrow midnight');

// временная метка для настоящего времени
$now = time();

// далее нужно вычислить оставшееся время до начала следующих суток и записать его в переменную $lot_time_remaining
$lot_time_remaining = $tomorrow - $now;
$hours_remaining = floor($lot_time_remaining / 3600);
$minutes_remaining = floor(($lot_time_remaining % 3600) / 60);
$lot_time_remaining = sprintf('%02d:%02d', $hours_remaining, $minutes_remaining);
?>
<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?= include_template('header.php'); ?>

<main class="container">
    <?= include_template('home.php', ['lot_time_remaining' => $lot_time_remaining]); ?>
</main>

<?= include_template('footer.php'); ?>

</body>
</html>