<?php
    $appName = "Task Manager";

    $tasks = [
        [
            'id' => 1,
            'title' => 'Виконати лабораторну роботу №5',
            'priority' => 'High',
            'is_completed' => false
        ],
        [
            'id' => 2,
            'title' => 'Вивчити основи PHP та принципи декомпозиції коду',
            'priority' => 'Medium',
            'is_completed' => true
        ],
        [
            'id' => 3,
            'title' => 'Підготувати звіт до лабораторної роботи',
            'priority' => 'Low',
            'is_completed' => false
        ],
        [
            'id' => 4,
            'title' => 'Налаштувати локальний сервер',
            'priority' => 'High',
            'is_completed' => true
        ],
        [
            'id' => 5,
            'title' => 'Прочитати документацію про масиви в PHP',
            'priority' => 'Medium',
            'is_completed' => false
        ],
    ];

    function formatTitle($text, $maxLength = 20) {
        if (mb_strlen($text) > $maxLength) {
            return mb_substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }

    function getCurrentGreeting() {
        $hour = (int)date('H');
        
        if ($hour >= 6 && $hour < 12) {
            return "Доброго ранку";
        } elseif ($hour >= 12 && $hour < 18) {
            return "Добрий день";
        } elseif ($hour >= 18 && $hour < 24) {
            return "Добрий вечір";
        } else {
            return "Доброї ночі";
        }
    }

    function getCurrentDate() {
        $months = [
            1 => 'січня',
            2 => 'лютого',
            3 => 'березня',
            4 => 'квітня',
            5 => 'травня',
            6 => 'червня',
            7 => 'липня',
            8 => 'серпня',
            9 => 'вересня',
            10 => 'жовтня',
            11 => 'листопада',
            12 => 'грудня'
        ];
        $day = date('d');
        $month = date('n');
        return $day . ' ' . $months[$month] . ' ' . date('Y') . ' р.';
    }
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        .task-done {
            color: green;
        }
        .task-pending {
            color: gray;
        }
    </style>
</head>
<body>
    <header>
        <p><?= getCurrentGreeting() ?> Сьогодні: <?= getCurrentDate() ?></p>
        <h1><?= $appName ?></h1>
    </header>
    <main>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">
                    <?= formatTitle($task['title'], 21) ?>
                    <?php if ($task['is_completed']): ?>
                        ✔️ Завдання виконано
                    <?php else: ?>
                        🕒 В процесі
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>