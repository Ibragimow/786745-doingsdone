<?php
date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, 'ru_RU');

function deadline {
    $current_date = time();
$secs_in_day = 86400;
$task_date_time = strtotime($task_date);
$dates_diff = $task_date_time - $current_date;
$days_to_task_date = floor ($dates_diff / $secs_in_day);

if ($days_to_task_date > 1) {
    $days_to_task_date = false;
}

else {
    $days_to_task_date = true;
}

return $days_to_task_date;
}
?>