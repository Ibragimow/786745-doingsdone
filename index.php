<?php
require_once('functions.php');
require_once ('data.php');
$page_content = include_template('index.php', [
    'tasks_list' => $tasks_list,
    'show_complete_tasks' => $show_complete_tasks,
]);
$layout_content = include_template('layout.php', [
    'page_content' => $page_content,
    'projects' => $projects,
    'tasks_list' => $tasks_list,
    'page_title' => '"Дела в порядке" - Главная страница',
    'username' => $username,
]);
print($layout_content);
?>