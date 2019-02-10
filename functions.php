<?php
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function esc($tasks_list) {
    $text = strip_tags($tasks_list);
    return $text;
}

function projects_count($tasks_list, $project) {
    $count = 0;
    foreach ($tasks_list as $task_item) {
        if ($task_item['task_category'] === $project) {
            $count +=1;
        }
    }
    return $count;
}

?>