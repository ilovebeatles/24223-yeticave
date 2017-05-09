<?php
date_default_timezone_set('Europe/Moscow');

const SECONDS_IN_MINUTE = 60;
const SECONDS_IN_HOUR = 3600;
const DEFAULT_DATE_FORMAT = 'd.m.y в H:i';

function convert_time_to_relative_format(int $timeStamp) : string
{
    if ($timeStamp < 0) {
        throw new \InvalidArgumentException('Timestamp cannot be less than zero');
    }

    $passed_time = time() - $timeStamp;

    if ($passed_time < 0) {
        throw new \InvalidArgumentException('Timestamp cannot be greater than current time.');
    }

    $passed_hours = round($passed_time / SECONDS_IN_HOUR);

    if ($passed_hours < 1) {
        $passed_minutes = round($passed_time / SECONDS_IN_MINUTE);
        return sprintf('%d минут назад', $passed_minutes);
    }

    if ($passed_hours < 24) {
        return sprintf('%d часов назад', $passed_hours);
    }

    return date(DEFAULT_DATE_FORMAT, $timeStamp);
}

function include_template(string $template_name, array $params = []) : string
{
    if (!file_exists("templates/$template_name")) {
        return '';
    }

    array_walk_recursive($params, function(&$item) {
        $item = htmlspecialchars($item);
    });

    extract($params);

    ob_start();
    include("templates/$template_name");

    return ob_get_clean();
}
?>