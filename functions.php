<?php
function include_template(string $templateName, array $params) : string
{
    if ($params) {
        foreach ($params as $key => $value) {
            $params[$key] = htmlspecialchars($value);
        }
    }

    $template = @include("templates/$templateName");

    if (!$template) {
        return '';
    }

    return $template;
}
?>
