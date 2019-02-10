<?php
$show_complete_tasks = rand(0, 1);
$projects = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$username = 'Ibragimow';
$tasks_list = [
    $task_1 = [
        "task_subj" => "Собеседование в IT компании",
        "task_date" => "01.12.2019",
        "task_category" => "Работа",
        "task_closed" => "Нет",
    ],
    $task_2 = [
        "task_subj" => "Выполнить тестовое задание",
        "task_date" => "25.12.2019",
        "task_category" => "Работа",
        "task_closed" => "Нет",
    ],
    $task_3 = [
        "task_subj" => "Сделать задание первого раздела",
        "task_date" => "21.12.2019",
        "task_category" => "Учеба",
        "task_closed" => "Нет",
    ],
    $task_4 = [
        "task_subj" => "Встреча с другом",
        "task_date" => "22.12.2019",
        "task_category" => "Входящие",
        "task_closed" => "Нет",
    ],
    $task_5 = [
        "task_subj" => "Купить корм для кота",
        "task_date" => "Нет",
        "task_category" => "Домашние дела",
        "task_closed" => "Нет",
    ],
    $task_6 = [
        "task_subj" => "Заказать пиццу",
        "task_date" => "Нет",
        "task_category" => "Домашние дела",
        "task_closed" => "Нет",
    ]
];
$tasks_list = [$task_1, $task_2, $task_3, $task_4, $task_5, $task_6];
?>