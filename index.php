<?php
    $appName = "Task Manager";
    $taskTitle = "Вивчити основи PHP";
    $taskTimeEstimate = 5; // ціле число (очікуваний час на виконання в годинах)
    $isCompleted = false;
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
        <h1><?= $appName ?></h1>
    </header>
    <main>
        <ul>
            <li><?= $taskTitle ?></li>
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