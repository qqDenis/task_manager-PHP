<?php
    $appName = "Task Manager";
    $taskTitle = "Вивчити основи PHP та принципи декомпозиції коду";
    $taskTimeEstimate = 5; // ціле число (очікуваний час на виконання в годинах)
    $isCompleted = false;

    function formatTitle($text, $maxLength = 20) {
        if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength) . '...';
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li><?= formatTitle($taskTitle, 21) ?></li>
            <li><?= $taskTimeEstimate ?></li>  
            <?php if ($isCompleted): ?>
                <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">✔️ Завдання виконано</li>
            <?php else: ?>
                <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">🕒 В процесі</li>
            <?php endif; ?>
        </ul>
    </main>
</body>
</html>